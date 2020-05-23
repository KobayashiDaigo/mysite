// ローディングアニメーション
var loadingWrap = document.getElementById('loadingWrap');
window.addEventListener('load', function() {
    loadingWrap.classList.add('loadingNone');
});

// ハンバーガーメニュー
function toggleNav() {
    var body = document.body;
    var hamburger = document.getElementById('js-hamburger');
    var nav = document.getElementById('global-nav');
    var blackBg = document.getElementById('js-black-bg');
  
    hamburger.addEventListener('click', function() {
      body.classList.toggle('nav-open');
    });
    nav.addEventListener('click', function() {
      body.classList.remove('nav-open');
    });
    blackBg.addEventListener('click', function() {
      body.classList.remove('nav-open');
    });
  }
  toggleNav();
  
// タブメニュー
jQuery(function() {
 
  // ①タブをクリックしたら発動
  jQuery('.plan span').click(function() {
 
    // ②クリックされたタブの順番を変数に格納
    var index = jQuery('.plan span').index(this);
 
    // ③クリック済みタブのデザインを設定したcssのクラスを一旦削除
    jQuery('.plan span').removeClass('active');
 
    // ④クリックされたタブにクリック済みデザインを適用する
    jQuery(this).addClass('active');
 
    // ⑤コンテンツを一旦非表示にし、クリックされた順番のコンテンツのみを表示
    jQuery('.price .plan-content').removeClass('show').eq(index).addClass('show');
 
  });
});

// タブメニュー
jQuery(function() {
 
  // ①タブをクリックしたら発動
  jQuery('.recruit-ttl li').click(function() {
 
    // ②クリックされたタブの順番を変数に格納
    var index = jQuery('.recruit-ttl li').index(this);
 
    // ③クリック済みタブのデザインを設定したcssのクラスを一旦削除
    jQuery('.recruit-ttl li').removeClass('active');
 
    // ④クリックされたタブにクリック済みデザインを適用する
    jQuery(this).addClass('active');
 
    // ⑤コンテンツを一旦非表示にし、クリックされた順番のコンテンツのみを表示
    jQuery('.recruit-content').removeClass('show').eq(index).addClass('show');
 
  });
});

// Q&A
jQuery(document).ready(function(){
  　jQuery(".question").on("click", function() {
  　　jQuery(this).next().slideToggle(200);
  　});
});

// スムーススクロール
jQuery(function(){
  // #で始まるリンクをクリックしたら実行されます
  jQuery('a[href^="#"]').click(function() {
    // スクロールの速度
    var speed = 400; // ミリ秒で記述
    var href= jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  })
});
  
// スクロールしたら下からふわっと
jQuery(function(){
  jQuery(window).scroll(function (){
    jQuery('.fadein').each(function(){
          var targetElement = jQuery(this).offset().top;
          var scroll = jQuery(window).scrollTop();
          var windowHeight = jQuery(window).height();
          if (scroll > targetElement - windowHeight + 200){
              jQuery(this).css('opacity','1');
              jQuery(this).css('transform','translateY(0)');
          }
      });
  });
});

// スクロールしたら右からふわっと
jQuery(function(){
  jQuery(window).scroll(function (){
    jQuery('.fadein-r').each(function(){
          var targetElement = jQuery(this).offset().top;
          var scroll = jQuery(window).scrollTop();
          var windowHeight = jQuery(window).height();
          if (scroll > targetElement - windowHeight + 200){
              jQuery(this).css('opacity','1');
              jQuery(this).css('transform','translateX(0)');
          }
      });
  });
});

// スクロールしたら左からふわっと
jQuery(function(){
  jQuery(window).scroll(function (){
    jQuery('.fadein-l').each(function(){
          var targetElement = jQuery(this).offset().top;
          var scroll = jQuery(window).scrollTop();
          var windowHeight = jQuery(window).height();
          if (scroll > targetElement - windowHeight + 200){
              jQuery(this).css('opacity','1');
              jQuery(this).css('transform','translateX(0)');
          }
      });
  });
});

// スクロールしたらぶわっと
jQuery(function(){
  jQuery(window).scroll(function (){
    jQuery('.fadeup').each(function(){
          var targetElement = jQuery(this).offset().top;
          var scroll = jQuery(window).scrollTop();
          var windowHeight = jQuery(window).height();
          if (scroll > targetElement - windowHeight + 200){
              jQuery(this).css('opacity','1');
              jQuery(this).css('transform','scale(1.0)');
          }
      });
  });
});