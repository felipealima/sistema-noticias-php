<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <?php
            $attributes = array("name" => "signupform");
            echo form_open("signup/index", $attributes);
            ?>
            <legend>Registro de Usuário</legend>

            <div class="form-group">
                <label for="fname">Nome</label>
                <input class="form-control" name="fname" placeholder="Digite seu Nome" type="text" value="<?php echo set_value('fname'); ?>" />
                <span class="text-danger"><?php echo form_error('fname'); ?></span>
            </div>          

            <div class="form-group">
                <label for="lname">Sobrenome</label>
                <input class="form-control" name="lname" placeholder="Digite seu Sobrenome" type="text" value="<?php echo set_value('lname'); ?>" />
                <span class="text-danger"><?php echo form_error('lname'); ?></span>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" name="email" placeholder="Digite seu Email" type="text" value="<?php echo set_value('email'); ?>" />
                <span class="text-danger"><?php echo form_error('email'); ?></span>
            </div>

            <div class="form-group">
                <label for="uname">Nome de Usuário</label>
                <input class="form-control" name="uname" placeholder="Digite um nome de usuário" type="text" value="<?php echo set_value('uname'); ?>" />
                <span class="text-danger"><?php echo form_error('uname'); ?></span>
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input class="form-control" name="password" placeholder="Digite sua Senha" type="password" />
                <span class="text-danger"><?php echo form_error('password'); ?></span>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirme a Senha</label>
                <input class="form-control" name="confirmPassword" placeholder="Confirme sua Senha" type="password" />
                <span class="text-danger"><?php echo form_error('confirmPassword'); ?></span>
            </div>

            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-info">Registrar</button>
                <button name="cancel" type="reset" class="btn btn-danger">Cancelar</button>
            </div>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>
