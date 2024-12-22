			<div class="footer">
				<div class="footerMenu">
					<ul class="nav menuBody mt-5">
					<li class="nav-item" title="Chats" <?= URLIs('/chatApp/chats.php') ? "style = 'background-color: #3C82C3'" : '' ?> >
						<a class="nav-link position-relative" href="chats.php">
							<i class="menuIcon bi bi-chat"></i>
							<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="menuChatCount">
								999
								<span class="visually-hidden">Unread messages count</span>
							</span>
						</a>
					</li>
					<li class="nav-item" title="Friends" <?= URLIs('/chatApp/friends.php') ? "style = 'background-color: #3C82C3'" : '' ?> >
						<a class="nav-link" href="friends.php">
							<i class="menuIcon bi bi-people"></i>
						</a>
					</li>
					<li class="nav-item" title="Friend Requests" <?= URLIs('/chatApp/friendRequests.php') ? "style = 'background-color: #3C82C3'" : '' ?> >
						<a class="nav-link position-relative" href="friendRequests.php">
							<i class="menuIcon bi bi-person-exclamation"></i>
							<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="menuChatCount">
								999
								<span class="visually-hidden">Friend requests count</span>
							</span>
						</a>
					</li>
					<li class="nav-item" title="Search" <?= URLIs('/chatApp/search.php') ? "style = 'background-color: #3C82C3'" : '' ?> >
						<a class="nav-link" href="search.php">
							<i class="menuIcon bi bi-search"></i>
						</a>
					</li>
					<li class="nav-item" title="Search" <?= URLIs('/chatApp/profile.php') ? "style = 'background-color: #3C82C3'" : '' ?> >
						<a class="nav-link" href="profile.php">
							<i class="menuIcon bi bi-person"></i>
						</a>
					</li>
				</ul>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
<script type="text/javascript" src="jsFiles/formValidator.js"></script>