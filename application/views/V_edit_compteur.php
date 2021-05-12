
<?php if($this->session->flashdata('error')){ ?>
    <div class="alert alert-primary" role="alert"><?php echo $this->session->flashdata('error'); ?></div>
<?php }else if($this->session->flashdata('success')){ ?>
    <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('success'); ?></div>
<?php }?>
<div class="col-lg-6">
    <div class="card">
        <div class="card-header primary">
            Modifier les compteurs
        </div>
        <div class="card-body">
            <form action="<?php echo base_url()?>C_compteur/update_compteur/<?php echo $result->id_compteur;?>" method="post">
                <div class="form-group">
                    <label for="code">Code du compteur :</label>
                    <input type="text" name="code" id="code" value="<?php echo $result->code_compteur; ?>">
                </div>
                <div class="form-group">
                    <label for="type">Type de compteur :</label>
                    <input type="text" name="type" id="type" value="<?php echo $result->type_compteur; ?>">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>