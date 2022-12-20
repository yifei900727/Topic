
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="sidebar_1" class="sidebar one_quarter first">
      <aside>
        <!-- ########################################################################################## -->
        <h2></h2>
        <nav>
          <ul>
            <li><a href="#志工招募" onclick="volunteer()">志工招募</a></li>
            <li><a href="#活動資訊" onclick="Activity()">活動資訊</a></li>
            <!-- <li><a href="#食物銀行">食物銀行</a></li> -->
          </ul>
        </nav>
        <!-- /section -->
        <!-- ########################################################################################## -->
      </aside>
    </div>
    <!-- ################################################################################################ -->
    <div class="container">
      <ul class=" row align-items-start vol" ></ul>
      
    </div>
    <!-- ################################################################################################ -->

    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
  
  <script>
    $.ajax({
        type: "POST",
        url: "VolunteerCon/vol",
        dataType: "JSON"
      })
      .done(function (e) {
        var con = document.querySelector(".vol")
        var str = ``;
        for (let i = 0; i < e.length; i++) {
        let str1 = `
        <div class="card clo aaa" style="width: 18rem;height:570px">
                  <img src="${e[i].V_img}" class="card-img-top bbb" alt="..." style="height:288px">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text txt"><strong>主辦單位:</strong>${e[i].V_organizer}</p>
                    <p class="card-text"><strong>地址:</strong>${e[i].V_local}</p>
                    <p class = "txt"><strong>${e[i].V_Introduction}</strong></p>
                    <footer class="read-more">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal${i}">
                        查看更多
                      </button>
                    </footer>
                    <div class="modal fade" id="exampleModal${i}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <img src="${e[i].V_img}" class="card-img-top" alt="..."  style="height: auto; width: auto; display:block; margin:auto;">
                            <div class="modal-body">
                              <p class="card-text"><strong>主辦單位:</strong>${e[i].V_organizer}</p>
                              <p class="card-text"><strong>地址:</strong>${e[i].V_local}</p>
                              <p ><strong>${e[i].V_Introduction}</strong></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                
                        `;
              str += str1;
          }
        con.innerHTML = str;

      })

    function volunteer() {
      $.ajax({
        type: "POST",
        url: "VolunteerCon/vol",
        dataType: "JSON"
      })
      .done(function (e) {
        var con = document.querySelector(".vol")
        var str = ``;
        for (let i = 0; i < e.length; i++) {
          
          
            // if (i % 3 == 0) {
              let str1 = `
              <div class="card clo aaa" style="width: 18rem;height:570px">
                  <img src="${e[i].V_img}" class="card-img-top bbb" alt="..." style="height:288px">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"><strong>主辦單位:</strong>${e[i].V_organizer}</p>
                    <p class="card-text"><strong>地址:</strong>${e[i].V_local}</p>
                    <p class = "txt"><strong>${e[i].V_Introduction}</strong></p>
                    <footer class="read-more">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal${i}">
                        查看更多
                      </button>
                    </footer>
                    <div class="modal fade" id="exampleModal${i}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <img src="${e[i].V_img}" class="card-img-top" alt="..."  style="height: auto; width: auto; display:block; margin:auto;">
                            <div class="modal-body">
                              <p class="card-text"><strong>主辦單位:</strong>${e[i].V_organizer}</p>
                              <p class="card-text"><strong>地址:</strong>${e[i].V_local}</p>
                              <p ><strong>${e[i].V_Introduction}</strong></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                        `;
              str += str1;
          }
        con.innerHTML = str;

      })
    }

    function Activity() {
      $.ajax({
          type: "POST",
          url: "VolunteerCon/act",
          dataType: "JSON"
        })
        .done(function (e) {
          var con = document.querySelector(".vol")
          var str = ``;
          for (let i = 0; i < e.length; i++) {
            
                    
              let str1 = `<div class="card clo aaa" style="width: 18rem;height:570px">
                  <img src="${e[i].A_img}" class="card-img-top bbb" alt="..." style="height:288px">
                  <div class="card-body">
                    <h5 class="card-title txt">${e[i].A_name}</h5>
                    <p class="card-text txt"><strong>地址:</strong>${e[i].A_local}</p>
                          `;
              str += str1;
              if (e[i].A_organizer != " ") {
                str1 = `<p class="card-text txt"><strong>主辦單位:</strong>${e[i].A_organizer}</p>`;
                str += str1;
              }

              str1 =`<p class = "txt"><strong>${e[i].A_introduction}</strong></p>
                    <footer class="read-more">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal${i}">
                    查看更多
                    </button>
                    </footer>
                    <div class="modal fade" id="exampleModal${i}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <img src="${e[i].A_img}" class="card-img-top" alt="..." style="height:288px">
                            <div class="card-body">
                              <h5 class="card-title">${e[i].A_name}</h5>
                              <p class="card-text"><strong>地址:</strong>${e[i].A_local}</p>`;
              str += str1;
              if (e[i].A_organizer != " ") {
                str1 = `<p class="card-text"><strong>主辦單位:</strong>${e[i].A_organizer}</p>`;
                str += str1;
              }
              str1=`<p ><strong>${e[i].A_introduction}</strong></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>`
              str += str1;
            
          }
          con.innerHTML = str;
        })
    }


  </script>