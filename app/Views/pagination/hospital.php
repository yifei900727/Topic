
  <div id="container">
    <div id="sidebar_1" class="sidebar one_quarter first">
      <aside>
        <!-- ########################################################################################## -->
        <h2></h2>
        <nav>
          <ul>
            <li><a href="#hos" onclick="hospital()">醫療院所</a></li>
            <li><a href="#nur" onclick="nursing()">照護中心</a></li>

          </ul>
        </nav>

        </section>
        <!-- /section -->
        <!-- ########################################################################################## -->
      </aside>
    </div>

    <div class="container">
      <ul class=" row align-items-start hos">

      </ul>
    </div>
  </div>
</div>
<div class="clear"></div>
</div>

<script>
  $.ajax({
    type: "POST",
    url: "HospitalCon/HosCon",
    dataType: "JSON"

  })
    .done(function (e) {
      var con = document.querySelector(".hos")
      var str = ``;
      for (let i = 0; i < e.length; i++) {

        let str1 = `
                        <div class="card clo aaa" style="width: 18rem; height:450px">
                  <img src="${e[i].H_img}" class="card-img-top bbb" alt="..." style="height:170px">
                  <div class="card-body">
                    <h5 class="card-title">${e[i].H_name}</h5>
                    <p class="card-text"><strong>電話:</strong>${e[i].H_number}</p>
                    <p class="card-text"><strong>地址:</strong>${e[i].H_local}</p>
                    
                  </div>
                </div>
                        `;
        str += str1;




      }
      con.innerHTML = str;
    })

  function hospital() {
    $.ajax({
      type: "POST",
      url: "HospitalCon/HosCon",
      dataType: "JSON"

    })
      .done(function (e) {
        var con = document.querySelector(".hos")
        var str = ``;
        for (let i = 0; i < e.length; i++) {

          let str1 = `
                        <div class="card clo aaa" style="width: 18rem; height:450px">
                  <img src="${e[i].H_img}" class="card-img-top bbb" alt="..." style="height:170px">
                  <div class="card-body">
                    <h5 class="card-title">${e[i].H_name}</h5>
                    <p class="card-text"><strong>電話:</strong>${e[i].H_number}</p>
                    <p class="card-text"><strong>地址:</strong>${e[i].H_local}</p>
                    
                  </div>
                </div>
                        `;
          str += str1;




        }
        con.innerHTML = str;
      })
  }

  function nursing() {
    $.ajax({
      type: "POST",
      url: "HospitalCon/NurCon",
      dataType: "JSON"

    })
      .done(function (e) {
        var con = document.querySelector(".hos")
        var str = ``;
        for (let i = 0; i < e.length; i++) {

          let str1 = `
                        <div class="card clo aaa" style="width: 18rem; height:520px">
                  <img src="${e[i].NH_img}" class="card-img-top bbb" alt="..." style="height:220px">
                  <div class="card-body">
                    <h5 class="card-title">${e[i].NH_name}</h5>
                    <p class="card-text"><strong>電話:</strong>${e[i].NH_number}</p>
                    <p class="card-text"><strong>地址:</strong>${e[i].NH_local}</p>
                    
                  </div>
                </div>
                        `;
          str += str1;




        }
        con.innerHTML = str;
      })
  }
</script>