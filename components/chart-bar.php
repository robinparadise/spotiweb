<script>
  new Chartist.Bar('<?= $id ?>', {
    labels: <?= json_encode($labels) ?>,
    series: <?= json_encode($series) ?>
  }, {
    fullWidth: true,
    axisY: {
      onlyInteger: true,
    },
    ...<?= json_encode($options) ?>
  });
</script>