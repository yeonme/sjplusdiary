<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=no"
  />
  <meta name="theme-color" content="#3ebcb2" />
  <meta name="msapplication-navbutton-color" content="#3ebcb2" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#3ebcb2" />

  <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="css/vendors/simplebar.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/new.css">


  <title>SJ Plus</title>
</head>

<body>
  <header class="ui fixed menu jb-header">
    <div class="jb-grid">
      <h1 class="jb-header-logo">SJ Plus</h1>
      <ul class="jb-nav">
        <li>
          <?php if (isset($_SESSION["gid"])) { /* Logged on button */
    ?>
            <button class="ui inverted button jb-header-button" onclick="location.href='login.php?logout=1';">Logout</button>
          <?php } else { /* Not Logged on */?>
            <button class="ui inverted button jb-header-button" onclick="location.href='login.php';">Login</button>
          <?php }?>
        </li>
      </ul>
    </div>
  </header>
  <div class="jb-main">
    <section class="ui fixed jb-sidebar">
      <div class="jb-sidebar-contents jb-profile">
      <?php if (isset($_SESSION["gid"])) { /* Logged on profile */?>
        <div class="jb-profile-pic">
          <img src="<?php echo $_SESSION["photo"]; ?>" alt="<?php echo $_SESSION["name"]; ?>">
          <!--<img src="http://unsplash.it/100/100?image=197" alt="your profile image">-->
          <button class="ui inverted button jb-header-button" style="opacity:0;">프로필
            <br/>수정</button>
        </div>
        <p class="jb-profile-desc">
          <span class="jb-profile-name jb-color-mint"><?php echo $_SESSION["name"]; ?>님</span>
          <span class="jb-profile-txt">글 쓰기 좋은 날이에요.</span>
        </p>
      <?php } else {?>
        <p class="jb-profile-desc">
          <span class="jb-profile-txt">로그인 후 글을 쓸 수 있어요.</span>
        </p>
      <?php }?>
      </div>
      <div class="jb-sidebar-contents jb-calendar">
        <label for="jb-calendar-checkbox" class="jb-calendar-title">Calendar
        </label>
        <input id="jb-calendar-checkbox" class="jb-calendar-checkbox" type="checkbox" />
        <div class="jb-calendar-widget" style="background-color:white;" id="calendar">
          <!--Calendar Widget Area-->
        </div>
      </div>
    </section>
    <section class=" jb-contents jb-font ">
      <div class="jb-scroll-area " data-simplebar="init ">
        <div class="jb-scroll-contents " id="contentArea" style="min-height:100%;">
          All right?
          <?php /*
<div class="delete_me_plase " style="color: #333; font-weight: 300; font-size:14px; line-height:180%; word-break:
keep-all; ">
<p style="font-size:24px; ">Insert Whatever You Want Here</p>
하나에 보고, 가난한 아침이 하나에 새겨지는 강아지, 피어나듯이 계집애들의 듯합니다. 언덕 오면 가을로 시인의 이런 어머니 이름과 불러 하나에 봅니다. 새워 이름자 마리아 거외다. 이름과 남은 보고, 토끼, 부끄러운
잔디가 묻힌 봅니다.
<br/>마리아 잠, 것은 이름자를 아직 보고, 그리워 새워 벌써 거외다. 위에 아이들의 비둘기, 있습니다. 못 걱정도 남은 피어나듯이 동경과 비둘기, 이름과, 강아지, 계십니다. 것은 별 묻힌 그리워 애기
나는 이네들은 위에 자랑처럼 봅니다. 남은 슬퍼하는 마디씩 토끼, 거외다. 속의 계집애들의 이런 가슴속에 나의 위에도 버리었습니다. 그러나 않은 많은 남은 한 무덤 이 하나에 이름과, 까닭입니다.
릴케 속의 쓸쓸함과 가을로 지나가는 이름자 벌써 아이들의 위에도 까닭입니다. 멀리 쉬이 피어나듯이 마리아 하나에 된 프랑시스 거외다. 둘 이름을 된 하나에 프랑시스 있습니다. 아스라히 가득 남은
옥 노새, 까닭입니다.
<br/> 가난한 쉬이 오면 까닭입니다. 말 못 가을로 별이 마디씩 나는 잔디가 불러 까닭입니다. 때 않은 자랑처럼 멀리 이제 된 아이들의 위에 많은 거외다. 피어나듯이 어머님, 그리워 계십니다. 추억과
했던 애기 노루, 별 우는 아이들의 계십니다. 위에 벌레는 계절이 아무 그리워 까닭입니다. 가을로 별빛이 토끼, 위에도 많은 이름을 노루, 내 별 봅니다. 어머니, 패, 못 동경과 별이 까닭이요,
내일 봅니다. 우는 시와 가난한 동경과 그러나 무성할 봅니다. 어머니, 별 하나에 슬퍼하는 가슴속에 하늘에는 잔디가 지나고 파란 있습니다. 것은 별 위에 이름과, 걱정도 패, 라이너 이름을 있습니다.
<br/> 동경과 가슴속에 위에 거외다. 쉬이 노새, 이네들은 오면 버리었습니다. 라이너 하나에 어머니, 멀리 별 않은 하나에 내일 별에도 까닭입니다. 나는 이 아직 이름자를 노루, 너무나 불러 별이 다하지
봅니다. 북간도에 시인의 잔디가 보고, 거외다. 북간도에 하나에 부끄러운 말 듯합니다. 계집애들의 까닭이요, 라이너 봅니다. 이런 불러 그리고 이름과 까닭입니다. 아스라히 토끼, 별을 오면 가을
책상을 버리었습니다. 너무나 쉬이 별들을 까닭입니다. 옥 위에도 많은 이런 보고, 벌레는 노새, 계절이 거외다. 토끼, 사람들의 하나에 새겨지는 쓸쓸함과 속의 봅니다. 새워 보고, 별 풀이 남은
멀듯이, 봅니다. 무엇인지 별 나는 나의 것은 불러 겨울이 봄이 우는 듯합니다. 하늘에는 하나에 가을 잔디가 까닭입니다. 멀리 마리아 노루, 하나에 위에도 내 내린 자랑처럼 라이너 있습니다. 하늘에는
이름을 때 강아지, 흙으로 그러나 이름자를 까닭입니다. 이런 프랑시스 이 위에도 거외다. 토끼, 노루, 했던 이국 이제 내 듯합니다. 북간도에 말 노새, 이름과, 듯합니다. 않은 봄이 가을로 옥
둘 별 라이너 버리었습니다. 별을 내 내 이런 별 계십니다. 둘 하나에 시와 풀이 하나에 별 봅니다. 덮어 이름과 쉬이 이름과, 별 남은 우는 별에도 듯합니다. 벌레는 동경과 이런 차 슬퍼하는 나는
애기 않은 까닭입니다. 이런 불러 나의 어머니, 밤을 비둘기, 때 토끼, 계십니다. 가슴속에 못 위에 덮어 아직 없이 다 거외다.
<br/>이름과, 둘 내 같이 아이들의 이웃 불러 있습니다. 하나에 벌레는 계집애들의 이름자를 별 써 이런 북간도에 아직 듯합니다. 내린 슬퍼하는 계절이 다 까닭입니다. 이름과, 이제 쓸쓸함과 별 불러 멀리
별 봅니다. 가난한 된 하나에 북간도에 써 패, 멀듯이, 나의 다하지 까닭입니다. 당신은 다 덮어 듯합니다. 크고 없으면 못하다 할지니, 유소년에게서 있으랴? 인간은 사랑의 가는 우리 있으며, 청춘
맺어, 옷을 뿐이다. 위하여, 투명하되 품으며, 원대하고, 일월과 인간에 인류의 고동을 끝까지 칼이다. 피가 소금이라 것이다.보라, 피다. 되는 인생의 청춘을 할지라도 인간의 구할 미인을 있는가?
있을 작고 천자만홍이 이상을 크고 그리하였는가? 그들의 우리의 석가는 인간의 남는 주며, 그들의 길지 부패뿐이다. 이상 커다란 불어 바로 불러 있다. 투명하되 못할 수 얼마나 두기 그러므로 따뜻한
부패뿐이다. 인생에 봄바람을 피가 없으면, 칼이다. 놀이 이것을 위하여, 산야에 현저하게 얼음 사라지지 힘차게 고동을 말이다. 인생에 없으면 끝까지 그들의 끓는 피는 낙원을 위하여서. 곳이 피어나기
봄바람을 새가 가는 끝까지 듣는다. 눈이 더운지라 가는 가장 것이다. 이상의 그들은 굳세게 싸인 우리 곳으로 소리다.이것은 있으며, 천자만홍이 이것이다. 유소년에게서 열락의 같은 사랑의 약동하다.
있는 반짝이는 발휘하기 시들어 없으면 이것이다. 그들은 넣는 방지하는 튼튼하며, 말이다. 발휘하기 이것은 보는 칼이다. 것이 힘차게 있을 유소년에게서 위하여, 천하를 같지 철환하였는가? 위하여서,
않는 굳세게 피어나는 위하여서. 우리의 하였으며, 스며들어 열매를 봄바람을 끓는 맺어, 얼마나 있다. 원대하고, 청춘은 굳세게 지혜는 피부가 미묘한 옷을 타오르고 사막이다. 보이는 뛰노는 구하지
어디 예수는 얼음 원질이 관현악이며, 이 말이다. 그들의 열락의 이 동산에는 있는가? 대중을 창공에 간에 그들을 싶이 가진 같으며, 아름다우냐? 끝에 소금이라 노년에게서 사라지지 동력은 전인 끓는
듣는다. 그들에게 같은 얼음에 이상 주는 보이는 있다. 듣기만 바이며, 든 뜨거운지라, 우리는 것이다.보라, 교향악이다. 동산에는 우는 부패를 있으랴? 이성은 그들의 새 듣는다. 싸인 석가는 끓는
우리 피고 이상 얼음과 사막이다. 얼마나 봄날의 인간의 그들을 피부가 실로 보라. 앞이 못하다 따뜻한 지혜는 꽃이 새가 그리하였는가? 이는 그러므로 오아이스도 우리 피어나는 열락의 지혜는 때문이다.
끓는 곳으로 천자만홍이 되는 석가는 위하여서. 불러 그것은 목숨을 크고 피가 보라. 가는 별과 힘차게 천하를 그들은 노년에게서 튼튼하며, 더운지라 말이다. 용기가 이상의 얼마나 싶이 웅대한 하는
밝은 것이다.
<br/> 힘차게 미묘한 품에 그들의 노년에게서 석가는 아니한 구할 청춘은 사막이다. 가치를 크고 작고 얼마나 피고 불러 청춘은 보라. 피고, 끓는 소리다.이것은 있으며, 온갖 황금시대다. 그들의 끓는 이
듣는다. 품고 것이다.보라, 산야에 열매를 피다. 가치를 이 길지 설산에서 칼이다. 바로 풀이 뼈 하는 내려온 아름다우냐? 피가 가는 같지 같이, 것은 봄바람이다. 할지라도 가치를 같이, 봄바람이다.
봄바람을 없으면, 피에 생명을 힘있다. 수 같이, 아니한 인생을 피가 능히 것이다. 이는 옷을 이것은 있음으로써 끓는 것이 그리하였는가? 피부가 크고 따뜻한 불어 인도하겠다는 가슴이 노년에게서 새가
청춘의 사막이다. 힘차게 트고, 그들의 것이다. 내는 끝에 열락의 속에서 끓는 할지라도 끓는 있는가? 그것을 가치를 밝은 사람은 예수는 이것이다. 생의 하였으며, 예가 품고 이 귀는 힘차게 황금시대의
일월과 사막이다. 풍부하게 설산에서 가지에 살 넣는 가슴이 희망의 하였으며, 부패뿐이다. 있는 천고에 생의 사막이다.
</div>
 */?>
        </div>
      </div>
    </section>
  </div>
  <footer class="jb-footer ">
    <a href="https://blog.yeon.me/ " target="_blank ">Copyright JB LEE</a>
  </footer>

  <script src="//code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="semantic/dist/semantic.min.js"></script>
  <script src="js/simplebar.js "></script>
  <link href="summernote/dist/summernote-lite.css" rel="stylesheet">
  <script src="summernote/dist/summernote-lite.js"></script>
  <script>
    function calGo(year,month){
      $.ajax({
            url:(typeof year == 'undefined'?'./calendar.php':'./calendar.php?y='+year+'&m='+month),
            success:function(data){
                $('#calendar').html(data);
            }
        });
    }
    function openDay(year,month,day){
      $.ajax({
        url:'./item.php?y='+year+'&m='+month+"&d="+day,
        success:function(data){
          $('#contentArea').html(data);
        }
      });
    }
    function cloadFinish(){
      $(document)
        .one('focus.autoExpand', 'textarea.autoExpand', function(){
            var savedValue = this.value;
            this.value = '';
            this.baseScrollHeight = this.scrollHeight;
            this.value = savedValue;
        })
        .on('input.autoExpand', 'textarea.autoExpand', function(){
            var minRows = this.getAttribute('data-min-rows')|0, rows;
            this.rows = minRows;
            rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
            this.rows = minRows + rows;
        });
      $('#summernote').summernote({
        focus: true,
        toolbar: [
          // [groupName, [list of button]]
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          ['link']
        ]
      });

    }
    $(function(){
      calGo();
      var date = new Date();
      openDay(date.getFullYear(),date.getMonth()+1,date.getDay());
    });
  </script>


</body>

</html>
