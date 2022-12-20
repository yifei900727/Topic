$.ajax({
    type: "POST",
    url: "EndofCon/Fs",
    dataType: "JSON"
})
    .done(function (e) {
        var con = document.querySelector(".FS")
        var str = ``;

        for (let i = 0; i < e.length; i++) {
            if (i == 0) {
                var str1 = `
                <tr>
                    <td>編號</td>
                    <td>公司名稱</td>
                    <td>位置</td>
                    <td>電話</td>
                </tr>
                    `;
                str += str1;
            }


            str1 = `
                <tr>
                    <td>${i + 1}</td>
                    <td>${e[i].FS_name}</td>
                    <td>${e[i].FS_local}</td>
                    <td>${e[i].FS_number}</td>
                </tr>
                    `;
            str += str1;
        }
        con.innerHTML = str;
    })
function Etiquette() {

    $.ajax({
        type: "POST",
        url: "EndofCon/Fs",
        dataType: "JSON"
    })
        .done(function (e) {
            var con = document.querySelector(".FS")
            var str = ``;
            var con1 = document.querySelector(".pla")
            var con2 = ` `;
            con1.innerHTML = con2;
            for (let i = 0; i < e.length; i++) {
                if (i == 0) {
                    var str1 = `
                <tr>
                    <td>編號</td>
                    <td>公司名稱</td>
                    <td>位置</td>
                    <td>電話</td>
                </tr>
                    `;
                    str += str1;
                }


                str1 = `
                <tr>
                    <td>${i + 1}</td>
                    <td>${e[i].FS_name}</td>
                    <td>${e[i].FS_local}</td>
                    <td>${e[i].FS_number}</td>
                </tr>
                    `;
                str += str1;
            }
            con.innerHTML = str;
        })
}

function Burial() {
    var con = document.querySelector(".FS")
    var con1 = document.querySelector(".pla")
    var str = `<div id="map"></div> `;
    var con2 = `
    <li><a href="#bur" onclick="Burial()" >公墓</a></li>
    <li><a href="#bur" onclick="Burial2()" >納骨塔</a></li>`;

    con1.innerHTML = con2;
    con.innerHTML = str;

    $.ajax({
        type: "POST",
        url: "EndofCon/coordinate1",
        dataType: "JSON"
    })
        .done(function (e) {

            uluru = { lat: Number(e[0].C1_latitude), lng: Number(e[0].C1_longitude) };
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 13,
                center: uluru,
            });
            var contentString = [];
            var marker_text = [];
            var infowindow = [];
            var marker = [];
            for (let i = 0; i < e.length; i++) {
                // console.log(i);
                // console.log(Number(e[i].C1_latitude));
                // console.log(Number(e[i].C1_longitude));

                contentString[i] = `<h2>${e[i].C1_name}</h2>
                                    <p>地址；${e[i].C1_local}</p>
                                    <p>電話；${e[i].C1_number}</p>
                                    `;


                // infowindow[i] = new google.maps.InfoWindow({
                //     content: contentString

                // });

                uluru = { lat: Number(e[i].C1_latitude), lng: Number(e[i].C1_longitude) };

                marker_text[i] = {
                    position: uluru,
                    map: map,
                    title: e[i].C1_name,
                };


                // marker.addListener('click', function () {
                //     infowindow.open(map, marker); //設定點選 marker 打開資訊視窗事件
                //     console.log(marker);
                // });


            }
            contentString.forEach(function (e, i) {
                infowindow[i] = new google.maps.InfoWindow({
                    content: e
                });
            });
            marker_text.forEach(function (e, i) {
                marker[i] = new google.maps.Marker(e);
                marker[i].setMap(map);
                marker[i].addListener('click', function () {
                    infowindow[i].open(map, marker[i]); //設定點選 marker 打開資訊視窗事件
                });
            });






        })
}
function Burial2() {
    var con = document.querySelector(".FS")
    var con1 = document.querySelector(".pla")
    var str = `<div id="map"></div> `;
    var con2 = `
    <li><a href="#bur" onclick="Burial()" >公墓</a></li>
    <li><a href="#bur" onclick="Burial2()" >納骨塔</a></li>`;

    con1.innerHTML = con2;
    con.innerHTML = str;

    $.ajax({
        type: "POST",
        url: "EndofCon/coordinate2",
        dataType: "JSON"
    })
        .done(function (e) {
            console.log(e);
            uluru = { lat: Number(e[0].C2_latitude), lng: Number(e[0].C2_longitude) };
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 13,
                center: uluru,
            });
            var contentString = [];
            var marker_text = [];
            var infowindow = [];
            var marker = [];
            console.log(1);
            for (let i = 0; i < e.length; i++) {
                // console.log(i);
                // console.log(Number(e[i].C1_latitude));
                // console.log(Number(e[i].C1_longitude));

                contentString[i] = `<h2>${e[i].C2_name}</h2>
                                    <p>地址:${e[i].C2_local}</p>
                                    <p>電話:${e[i].C2_number}</p>
                                    `;


                // infowindow[i] = new google.maps.InfoWindow({
                //     content: contentString

                // });

                uluru = { lat: Number(e[i].C2_latitude), lng: Number(e[i].C2_longitude) };

                marker_text[i] = {
                    position: uluru,
                    map: map,
                    title: e[i].C2_name,
                };


                // marker.addListener('click', function () {
                //     infowindow.open(map, marker); //設定點選 marker 打開資訊視窗事件
                //     console.log(marker);
                // });


            }
            console.log(2);
            contentString.forEach(function (e, i) {
                infowindow[i] = new google.maps.InfoWindow({
                    content: e
                });
            });
            console.log(3);
            marker_text.forEach(function (e, i) {
                marker[i] = new google.maps.Marker(e);
                console.log(1);
                marker[i].setMap(map);
                console.log(2);
                marker[i].addListener('click', function () {
                    infowindow[i].open(map, marker[i]); //設定點選 marker 打開資訊視窗事件
                    console.log(marker[i]);
                });
                console.log(3);
            });






        })
}
