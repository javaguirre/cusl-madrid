 $(document).ready(function() {
    $('#ul-news-global li').each(function(){
      if($(this).attr("id").substring(4) > 4)
      {
        $(this).hide();
      }
    });
    $('#link-more-news').click(function(){
      $('#ul-news-global li').show();
      $('#link-more-news').hide();
    });
 });

