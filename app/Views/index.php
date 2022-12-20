
  <div id="container">
    <!-- ################################################################################################ -->
    <div class="container">
      <div class="row align-items-start">


        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner a">

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>


        <div class="card col-3 aaa" style="width: 18rem;height:540px">
          <img src="http://www.kvc.org.tw/upload/unit_recruit/16524325782.jpg" class="card-img-top bbb" alt="..."
            style="height:260px">
          <div class="card-body">
            <p class="card-text"><strong>主辦單位:</strong>高雄市自強身障關懷協會</p>
            <p class="card-text"><strong>地址:</strong>高雄市鼓山區高雄市鼓山</p>
            <p class="card-text txt ">1.關懷志工7名<br>
              2.活動志工3名<br>
              3.請各位志工填寫下列google表單，以利本單位了解志工可服務時段，謝謝。<br>
            </p>
            <footer class="read-more">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                查看更多
              </button>
            </footer>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <img src="http://www.kvc.org.tw/upload/unit_recruit/16524325782.jpg" class="card-img-top" alt="..."
                    style="height: auto; width: auto; display:block; margin:auto;">
                  <div class="modal-body">
                    <p class="card-text"><strong>主辦單位:</strong>高雄市自強身障關懷協會</p>
                    <p class="card-text"><strong>地址:</strong>高雄市鼓山區高雄市鼓山</p>
                    <p class="card-text"><strong>1.關懷志工7名<br>
                        2.活動志工3名<br>
                        3.請各位志工填寫下列google表單，以利本單位了解志工可服務時段，謝謝。<br>
                        4.https://reurl.cc/A7AXXQ(google表單)</strong></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-3 aaa" style="width: 18rem;height:540px">
          <img src="http://www.kvc.org.tw/upload/unit_recruit/16520701272.jpg" class="card-img-top bbb" alt="..."
            style="height:260px">
          <div class="card-body">
            <p class="card-text"><strong>主辦單位:</strong>財團法人高雄市三洋維士比集團教育基金會</p>
            <p class="card-text"><strong>地址:</strong>高雄市岡山區網路時代其實不限地</p>
            <p class="card-text txt">當事人訊息如下：

              您好，我是蘇昺仁，視障中度，目前已有三個碩士，想找機會再申請博士班的課程。因电腦須要輔佐，懇請您幫我作論文的搜尋文献探討，編輯和改寫等。勞煩之處，敬致最高的謝忱，謝謝您。

            </p>
            <footer class="read-more">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                查看更多
              </button>
            </footer>
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <img src="http://www.kvc.org.tw/upload/unit_recruit/16520701272.jpg" class="card-img-top" alt="..."
                    style="height: auto; width: auto; display:block; margin:auto;">
                  <div class="modal-body">
                    <p class="card-text"><strong>主辦單位:</strong>財團法人高雄市三洋維士比集團教育基金會</p>
                    <p class="card-text"><strong>地址:</strong>高雄市岡山區網路時代其實不限地</p>
                    <p class="card-text">當事人訊息如下： <br>

                      您好，我是蘇昺仁，視障中度，目前已有三個碩士，想找機會再申請博士班的課程。因电腦須要輔佐，懇請您幫我作論文的搜尋文献探討，編輯和改寫等。勞煩之處，敬致最高的謝忱，謝謝您。

                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- ################################################################################################ -->
      <div class="clear"></div>
    </div>
  </div>

  <script>
    $.ajax({
      type: "POST",
      url: "VolunteerCon/act",
      dataType: "JSON"
    })
      .done(function (e) {
        var con = document.querySelector(".a")
        var str = ``;
        for (let i = 1; i < 6; i++) {
          if (i == 1) {
            str1 = ` <div class="carousel-item active">
          <img src="${e[i].A_img}" class="d-block w-100" alt="..." style="height:50%; width:50%;">
        </div>`;
            str += str1;
          } else {
            str1 = ` <div class="carousel-item ">
          <img src="${e[i].A_img}" class="d-block w-100" alt="..." height="height:50%; width:50%;">
        </div>`;
            str += str1;
          }



        }


        con.innerHTML = str;
      })
  </script>