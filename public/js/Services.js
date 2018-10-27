/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
  $('.circle-container').find('a').click(function(event) {
    event.preventDefault();
  });
  $('.circle-container').find('li').hover(function() {
    $('.circle-container').find('li').removeClass('active');
    $(this).addClass('active');
    $('.services-container').find('li.active').removeClass('active animated fadeIn');

    $(".services-container").find('li').eq($(this).data('id')).addClass('active animated fadeIn');

  });

});