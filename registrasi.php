<body>

<div>
    <h1 class="mt-5">Registrasi</h1>
    <p class="lead">Silahkan Daftarkan Identitas Anda</p>
    <p><span class="error">* wajib diisi</span></p>
    <hr/>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form">
            <label for="username">Username</label>
            <div>
                <span class="error">* <?php echo $usernameErr;?></span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
        </div>

        <div class="form">
            <label for="email">Email</label>
            <div>
                <span class="error">* <?php echo $emailErr;?></span>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        </div>

        <div class="form">
            <label for="password">Password</label>
            <span class="error">* <?php echo $passwordErr;?></span>
            <div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
        </div>

        <div class="form">
            <label for="nama">Nama</label><span class="error">* <?php echo $namaErr;?></span>
            <div>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>
        </div>

        <div class="form">
            <label for="Lahir">Lahir</label>
            <span class="error">* <?php echo $lahirErr;?></span>
            <div>
                <input type="text" class="form-control" id="lahir" name="lahir" placeholder="Lahir">
            </div>
        </div>

        <div class="form">
            <label for="gender">Gender</label>
            <span class="error">* <?php echo $genderErr;?></span>
            <div>
                <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender">
            </div>
        </div>

        <div class="form">
            <label for="agama">Agama</label>
            <span class="error">* <?php echo $agamaErr;?></span>
            <div>
                <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama">
            </div>
        </div>

        <div class="form">
            <label for="pekerjaan">Pekerjaan</label>
            <span class="error">* <?php echo $pekerjaanErr;?></span>
            <div>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
            </div>
        </div>

        <div class="form">
            <a href="login.php">Login</a>
            <button type="submit" name="register">Register</button>
        </div>


    </form>
</div>
</main>

<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">Warung Belajar@2019</span>
    </div>
</footer>
</body>
</html><?php
