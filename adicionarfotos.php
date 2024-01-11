<h1>Upload de Arquivos</h1>
            <?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>

            <form action="upload.php" method="POST" enctype="multipart/form-data">
                Nome do funcionário: <input type="text" required name="nome">
                Foto do funcionário: <input type="file" required name="arquivo">
                <input type="submit" value="Salvar">
            </form>