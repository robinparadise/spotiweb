<script>
  new Chartist.Pie('<?= $id ?>', {
    labels: <?= json_encode($labels) ?>,
    series: <?= json_encode($series) ?>
  }, <?= json_encode($options) ?>);
</script>