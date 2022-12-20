
const googleMap = new Vue({
    el: '#app',
    data: {
        map: null
    },
    methods: {
        // init google map
        initMap() {

            // 預設顯示的地點：台北市政府親子劇場
            let location = {
                lat: 25.0374865, // 經度
                lng: 121.5647688 // 緯度
            };

            // 建立地圖
            this.map = new google.maps.Map(document.getElementById('map'), {
                center: location, // 中心點座標
                zoom: 16, // 1-20，數字愈大，地圖愈細：1是世界地圖，20就會到街道
                /*
                  roadmap 顯示默認道路地圖視圖。
                  satellite 顯示 Google 地球衛星圖像。
                  hybrid 顯示正常和衛星視圖的混合。
                  terrain 顯示基於地形信息的物理地圖。
                */
                mapTypeId: 'terrain'
            });

            // 放置marker
            let marker = new google.maps.Marker({
                position: location,
                map: this.map
            });

        }
    },
    created() {
        window.addEventListener('load', () => {
            this.initMap();
        });
    }
});