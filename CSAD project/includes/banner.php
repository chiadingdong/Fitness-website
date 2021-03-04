<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>
<!-- Page content -->
            <div class="content">
                <h2 class="content-title">Recent Articles</h2>
                <hr>
                <!-- more content still to come here ... -->
                <?php foreach ($posts as $post): ?>
                    <div class="post" style="margin-left: 0px;">
                        <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
                        <!-- Added this if statement... -->
                        <?php if (isset($post['topic']['name'])): ?>
                            <a 
                                href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
                                class="btn category">
                                    <?php echo $post['topic']['name'] ?>
                            </a>
                        <?php endif ?>

                        <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                            <div class="post_info">
                                <h3><?php echo $post['title'] ?></h3>
                                <div class="info">
                                    <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                                    <span class="read_more">Read more...</span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>

            </div>
<?php }else{ ?>
	<div class="banner">
		<div class="welcome_msg">
			<h1>Today's Inspiration</h1>
			<p> 
			    One day your life <br> 
			    will flash before your eyes. <br> 
			    Make sure it's worth watching. <br>
				<span>~ Gerard Way</span>
			</p>
			<a href="register.php" class="btn">Join us!</a>
		</div>

		<div class="login_div">
			<form action="<?php echo BASE_URL . 'home.php'; ?>" method="post" >
				<h2>Login</h2>
				<div style="width: 60%; margin: 0px auto;">
					<?php include(ROOT_PATH . '/includes/errors.php') ?>
				</div>
				<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
				<input type="password" name="password"  placeholder="Password"> 
				<button class="btn" type="submit" name="login_btn">Sign in</button>
			</form>
		</div>
	</div>
<?php } ?>
