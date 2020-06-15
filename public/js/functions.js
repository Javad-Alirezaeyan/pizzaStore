function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}


function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

$(document).ready(function () {
    if (document.getElementById("itemTypeUl")){

        $.ajax({
            url: "/getPercentageItemType",
            type: 'get',
            data: {},
            dataType: 'json',
        })
            .done(function (data) {
                setPieChart(data);
            })
            .fail(function (jqXHR, textStatus) {
                console.log(jqXHR.responseText);

            });
    }

    function setPieChart(data){

        itemTypeList = data['percentage'];
        let htmltitles = "";
        colorPattern = [ '#745af2', '#26c6da', '#1e88e5', '#eceff1', 'red', 'blue', 'green'];

        for (i = 0; i< itemTypeList.length; i++){
            let itemType = itemTypeList[i];
            htmltitles += '<li><h6 className="text-muted " style="color:'+colorPattern[i]+'">' +
                '<i className="fa fa-circle font-10 m-r-10 "></i>'+itemType[0]+'</h6></li>';
        }

        $("#itemTypeUl").html(htmltitles);
        var chart = c3.generate({
            bindto: '#visitor',
            data: {
                columns: itemTypeList,
                /*columns:  [
                    ['Other', 30],
                    ['Desktop', 10],
                    ['Tablet', 40],

                ],*/

                type : 'donut',
                onclick: function (d, i) { console.log("onclick", d, i); },
                onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                onmouseout: function (d, i) { console.log("onmouseout", d, i); }
            },
            donut: {
                label: {
                    show: false
                },
                title: "Item Types",
                width:20,

            },

            legend: {
                hide: true
                //or hide: 'data1'
                //or hide: ['data1', 'data2']
            },
            color: {
                pattern: colorPattern
            }
        });

    }

})

function deleteItem(id){
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this item! ",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "yes",
        cancelButtonText: "cancel",
        closeOnConfirm: true
    }, function () {
        window.location = "/deleteItem/"+id ;
    });
}


