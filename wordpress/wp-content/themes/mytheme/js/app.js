$(function () {
  let target1 = $("#parallax-01");
  let targetPosOT1 = target1.offset().top;
  let target2 = $("#parallax-02");
  let targetPosOT2 = target2.offset().top;
  let targetFactor = 0.5;
  let windowH = $(window).height();
  let scrollYStart1 = targetPosOT1 - windowH;
  let scrollYStart2 = targetPosOT2 - windowH;
  $(window).on('scroll', function () {
    let scrollY = $(this).scrollTop();
    if (scrollY > scrollYStart1) {
      target1.css('background-position-y', (scrollY - targetPosOT1) * targetFactor + 'px');
    } else {
      target1.css('background-position', 'center top');
    }
    if (scrollY > scrollYStart2) {
      target2.css('background-position-y', (scrollY - targetPosOT2) * targetFactor + 'px');
    } else {
      target2.css('background-position', 'center top');
    }
  });
});
