<!DOCTYPE html>
<html>
<header>
  <title>CodeIgniter Ajax Jquery Pagination</title>
  <script src="<?php echo base_url(); ?>assets/js/jquery-1.6.4.min.js"></script>
  <script>
  $(function() {
    applyPagination();

    function applyPagination() {
      $("#ajax_paging a").click(function() {
        var url = $(this).attr("href");
        $.ajax({
          type: "POST",
          data: "ajax=1",
          url: url,
          beforeSend: function() {
            $("#content").html("");
          },
          success: function(msg) {
            $("#content").html(msg);
            applyPagination();
          }
        });
        return false;
      });
    }
  });
  </script>
</header>
<body>
<div id="content">
  <div id="data">
    <?php foreach($user['name'] as $u): ?>
        <div><?php echo $u; ?></div>
    <?php endforeach; ?>
  </data>

  <div id="ajax_paging">
    <?php echo $pagination; ?>
  </div>
</div>
</body>
</html>