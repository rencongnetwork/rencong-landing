<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/navbar'); ?>


<?php if(isset($content)): ?>
    <?php $this->load->view($content); ?>
<?php else: ?>
    <?= "No Content"; ?>
<?php endif; ?>


<?php $this->load->view('layout/footer'); ?>
