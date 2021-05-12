<div class="container row" style="margin-top: 10px;">
    <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-success" id="flash-messages">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
            </div>
    <?php } else if($this->session->flashdata('error')){  ?>

            <div class="alert alert-danger" id="flash-messages">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
            </div>

    <?php }  ?>
    <section class="col-lg-12 connectedSortable">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Ajouter 
        </button>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enregistrer un compteur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('C_compteur/insert_compteur')?>" method="post">
                            <div class="form-group">
                                <label for="code">Code compteur :</label>
                                <input type="text" name="code" id="code" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="type">Type compteur :</label>
                                <input type="text" name="type" id="type" autocomplete="off" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><br>

        <table class="table table-striped" id="table">
        <thead>
            <tr>
            <th scope="col">Code compteur</th>
            <th scope="col">Type compteur</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row) {?>
            <tr>
                <td><?= $row->code_compteur ?></td>
                <td><?= $row->type_compteur ?></td>
                <td>
                    <a href="<?php echo base_url()?>C_compteur/edit_compteur/<?= $row->id_compteur ?>" class="btn btn-info btn-lg" id="edit">
                        <span class="glyphicon glyphicon-pencil"></span> edit 
                    </a>
                    <a href="<?php echo base_url()?>C_compteur/delete_compteur/<?= $row->id_compteur ?>" class="btn btn-danger btn-lg">
                        <span class="glyphicon glyphicon-trash"></span> del
                    </a>
                </td>
            </tr>
            <?php }?>
        </tbody>
        </table>
    </section>
</div>
