<html>
	<head>
	
	</head>
	<body>
	<?php
		require_once("/connector.php");

		if(isset($_POST['remove_announsment_button']))
		{
			//echo $_POST['remove_announsment_field'];
			
			echo "Поле под номером \"".$_POST['remove_announsment_field']."\" из таблицы \"announcement\" удалено. <br/>";
			$remove_announsment_request = "Delete from schedule.announcement where id_ann = '".$_POST['remove_announsment_field']."';";
			$server_connect_pdo->query($remove_announsment_request); 
		}
		else if(isset($_POST['remove_advert_button']))
		{
			//echo $_POST['remove_advert_field'];
			
			echo "Поле под номером \"".$_POST['remove_advert_field']."\" из таблицы \"advert\" удалено. <br/>";
			$remove_advert_request = "Delete from schedule.advert where id_ad = '".$_POST['remove_advert_field']."';";
			$server_connect_pdo->query($remove_advert_request); 
		}
		else if(isset($_POST['remove_class_button']))
		{
			//echo $_POST['remove_class_field'];
			
			echo "Поле с именем \"".$_POST['remove_class_field']."\" из таблицы \"class\" удалено. <br/>";
			$remove_class_request = "Delete from schedule.class where name = '".$_POST['remove_class_field']."';";
			$server_connect_pdo->query($remove_class_request); 
		}
		else if(isset($_POST['remove_department_button']))
		{
			//echo $_POST['remove_department_field'];
			
			echo "Поле с именем \"".$_POST['remove_department_field']."\" из таблицы \"department\" удалено. <br/>";
			$remove_department_request = "Delete from schedule.department where department = '".$_POST['remove_department_field']."';";
			$server_connect_pdo->query($remove_department_request); 
		}
		else if(isset($_POST['remove_faculty_button']))
		{
			//echo $_POST['remove_faculty_field'];
			
			echo "Поле с именем \"".$_POST['remove_faculty_field']."\" из таблицы \"faculty\" удалено. <br/>";
			$remove_faculty_request = "Delete from schedule.faculty where name = '".$_POST['remove_faculty_field']."';";
			$server_connect_pdo->query($remove_faculty_request); 
			
			$remove_advert_request = "Delete from schedule.advert where faculty = '".$_POST['remove_faculty_field']."';";
			$server_connect_pdo->query($remove_advert_request);

			$remove_announcement_request = "Delete from schedule.announcement where faculty = '".$_POST['remove_faculty_field']."';";
			$server_connect_pdo->query($remove_announcement_request);
			
			$remove_class_request = "Delete from schedule.class where faculty = '".$_POST['remove_faculty_field']."';";
			$server_connect_pdo->query($remove_class_request);
			
			$remove_department_request = "Delete from schedule.department where faculty = '".$_POST['remove_faculty_field']."';";
			$server_connect_pdo->query($remove_department_request);
			
			$remove_group_request = "Delete from schedule.group where faculty = '".$_POST['remove_faculty_field']."';";
			$server_connect_pdo->query($remove_group_request);
			
			$remove_lesson_request = "Delete from schedule.lesson where faculty = '".$_POST['remove_faculty_field']."';";
			$server_connect_pdo->query($remove_lesson_request);
			
			$remove_speciality_request = "Delete from schedule.speciality where faculty = '".$_POST['remove_faculty_field']."';";
			$server_connect_pdo->query($remove_speciality_request);
		}
		else if(isset($_POST['remove_group_button']))
		{
			//echo $_POST['remove_group_field'];
			
			echo "Поле под номером \"".$_POST['remove_group_field']."\" из таблицы \"group\" удалено. <br/>";
			$remove_group_request = "Delete from schedule.group where id_group = '".$_POST['remove_group_field']."';";
			$server_connect_pdo->query($remove_group_request); 
		}
		else if(isset($_POST['remove_lecturer_button']))
		{
			//echo $_POST['remove_lecturer_field'];
			
			echo "Поле под номером \"".$_POST['remove_lecturer_field']."\" из таблицы \"lecturer\" удалено. <br/>";
			$remove_lecturer_request = "Delete from schedule.lecturer where id_user = '".$_POST['remove_lecturer_field']."';";
			$server_connect_pdo->query($remove_lecturer_request); 
		}
		else if(isset($_POST['remove_lesson_button']))
		{
			//echo $_POST['remove_lesson_field'];
			
			echo "Поле под номером \"".$_POST['remove_lesson_field']."\" из таблицы \"lesson\" удалено. <br/>";
			$remove_lesson_request = "Delete from schedule.lesson where id_lesson = '".$_POST['remove_lesson_field']."';";
			$server_connect_pdo->query($remove_lesson_request);
		}
		else if(isset($_POST['remove_speciality_button']))
		{
			//echo $_POST['remove_speciality_field'];
			
			echo "Поле с именем \"".$_POST['remove_speciality_field']."\" из таблицы \"speciality\" удалено. <br/>";
			$remove_speciality_request = "Delete from schedule.speciality where name_spec = '".$_POST['remove_speciality_field']."';";
			$server_connect_pdo->query($remove_speciality_request);
		}
		else if(isset($_POST['remove_user_button']))
		{
			//echo $_POST['remove_user_field'];
			
			echo "Поле с именем \"".$_POST['remove_user_field']."\" из таблицы \"user\" удалено. <br/>";
			$remove_user_request = "Delete from schedule.user where id_user = '".$_POST['remove_user_field']."';";
			$server_connect_pdo->query($remove_user_request);
		}
		
		if(isset($_POST['add_new_announcement_button']))
		{
			//echo $_POST['new_record_date'].", ".$_POST['new_record_lector'].", ".$_POST['new_record_announcement'].", ".$_POST['new_record_subject'];
			$add_new_announcement_request = "Insert into schedule.announcement Values(null, '".$_POST['new_announsment_record_date']."', ".$_POST['new_announsment_record_lector'].", '".$_POST['new_announsment_record_announcement']."', '".$_POST['new_announsment_record_subject']."', '".$_POST['choosen_faculty']."');";
			$add_new_announcement = $server_connect_pdo->query($add_new_announcement_request);
			echo "Новая запись успешно добавлена.<br/>";
		}
		else if(isset($_POST['add_new_advert_button']))
		{
			$add_new_advert_request = "Insert into schedule.advert Values(null, '".$_POST['new_advert_record_date']."', '".$_POST['new_advert_record_advert']."', '".$_POST['new_advert_record_subject']."', '".$_POST['choosen_faculty']."');";
			$add_new_advert = $server_connect_pdo->query($add_new_advert_request);
			echo "Новая запись успешно добавлена.<br/>";
		}
		else if(isset($_POST['add_new_class_button']))
		{
			$add_new_class_request = "Insert into schedule.class Values('".$_POST['new_class_record_name']."', '".$_POST['choosen_faculty']."');";
			$add_new_class = $server_connect_pdo->query($add_new_class_request);
			echo "Новая запись успешно добавлена.<br/>";
		}
		else if(isset($_POST['add_new_department_button']))
		{
			$add_new_department_request = "Insert into schedule.department Values('".$_POST['new_department_record_name']."', '".$_POST['choosen_faculty']."');";
			$add_new_department = $server_connect_pdo->query($add_new_department_request);
			echo "Новая запись успешно добавлена.<br/>";
		}
		else if(isset($_POST['add_new_faculty_button']))
		{
			$add_new_faculty_request = "Insert into schedule.faculty Values('".$_POST['new_faculty_record_name']."');";
			$add_new_faculty = $server_connect_pdo->query($add_new_faculty_request);
			echo "Новая запись успешно добавлена.<br/>";
		}
		else if(isset($_POST['add_new_group_button']))
		{
			/*echo "<br/>".$_POST['choosen_faculty']." ".$_POST['new_group_record_speciality']." ".$_POST['new_group_record_course']." ".$_POST['new_group_record_name']."<br/>";*/
			
			$add_new_group_request = "Insert into schedule.group Values(null, '".$_POST['choosen_faculty']."', '".$_POST['new_group_record_speciality']."', ".$_POST['new_group_record_course'].", '".$_POST['new_group_record_name']."');";
			$add_new_group = $server_connect_pdo->query($add_new_group_request);
			echo "Новая запись успешно добавлена.<br/>";
		}
		else if(isset($_POST['add_new_speciality_button']))
		{
			$add_new_speciality_request = "Insert into schedule.speciality Values('".$_POST['new_speciality_record_name']."', '".$_POST['choosen_faculty']."');";
			$add_new_speciality = $server_connect_pdo->query($add_new_speciality_request);
			echo "Новая запись успешно добавлена.<br/>";
		}
		else if(isset($_POST['add_new_lecturer_button']))
		{
			/*echo $_POST['new_lecturer_record_name']." ".$_POST['new_lecturer_record_degree']." ".$_POST['new_lecturer_record_department'];*/
			
			$add_new_lecturer_request = "Insert into schedule.lecturer Values('".$_POST['new_lecturer_record_name']."', null, '".$_POST['new_lecturer_record_degree']."', '".$_POST['new_lecturer_record_department']."');";
			$add_new_lecturer = $server_connect_pdo->query($add_new_lecturer_request);
			echo "Новая запись успешно добавлена.<br/>";
		}
		else if(isset($_POST['add_new_user_button']))
		{
			$add_new_user_request = "Insert into schedule.user Values(null, '".$_POST['new_user_record_login']."', '".$_POST['new_user_record_password']."', '".$_POST['new_user_record_category']."');";
			$add_new_user = $server_connect_pdo->query($add_new_user_request);
			echo "Новая запись успешно добавлена.<br/>";
		}
	?>
	
		<?//user_choose_form BEGIN?>
		<div id = "user_choose_div" style = "border: ridge 5px black;">
			<form name = "user_choose_form" action = "" method = "POST">
		<?php
				$db_info_getter_request = "Select * from schedule.user;";
				$db_info_getter = $server_connect_pdo->query($db_info_getter_request);
		?>
				<div class = "table_content_list">
					<table border = '1'>
						<tr>
							<td align = "center">Ид</td>
							<td align = "center">Логин</td>
							<td align = "center">Пароль</td>
							<td align = "center">Категория пользователя</td>
							<td align = 'center'>Функции</td>
						</tr>
		<?php
						while($row = $db_info_getter->fetch(PDO::FETCH_ASSOC))
						{
		?>
							<tr>
								<td>
									<?php echo $row['id_user'];?>
								</td>
								<td>
									<?php echo $row['login'];?>
								</td>
								<td>
									<?php echo $row['password'];?>
								</td>
								<td>
									<?php echo $row['user_category'];?>
								</td>
								<td>
									<form name = "user_admin_remove_post" action = "" method = "POST">
										<input type = "hidden" name = "remove_user_field" value = "<?= $row['id_user']?>"></input>
										<input type = "submit" name = "remove_user_button" value = "Удалить"/>
									</form>
								</td>
							</tr>
		<?php
						}
		?>
					</table>
				</div>
				<br/>
				<div class = "add_new_user_place" style = "border: ridge 1px black;">
					<label>Добавление новой записи:</label>
					<br/>
					<form name = "add_new_user_form" action = "" method = "POST">
						<div class = "new_user_login_field">
							<label class = "new_user_login_label">Логин:</label>
							<input type = "text" name = "new_user_record_login" value = ""/>
						</div>
						<div class = "new_user_password_field">
							<label class = "new_user_password_label">Пароль:</label>
							<input type = "text" name = "new_user_record_password" value = ""/>
						</div>
						<div class = "new_user_category_field">
							<label class = "new_user_category_label">Введите категорию пользователя:</label>
							<select name = "new_user_record_category">
								<option value = "student">студент</option>
								<option value = "lecturer">преподаватель</option>
								<option value = "admin">админ</option>
							</select>
						</div>
						<br/>
						<input type = "submit" name = "add_new_user_button" value = "Добавить"/>
					</form>
				</div>
			</form>
		</div>
		<?//user_choose_form END?>
		
		<?/*lecturer_choose_form BEGIN?>
		<br/>
		<div id = "lecturer_choose_div" style = "border: ridge 5px black;">
			<form name = "lecturer_choose_form" action = "" method = "POST">
			<?php
				$db_info_getter_request = "Select * from schedule.lecturer;";
				$db_info_getter = $server_connect_pdo->query($db_info_getter_request);
			?>
				<div class = "table_content_list">
					<table border = '1'>
						<tr>
							<td align = 'center'>Ид</td>
							<td align = 'center'>ФИО</td>
							<td align = 'center'>Уч. степень</td>
							<td align = 'center'>Кафедра</td>
							<td align = 'center'>Функции</td>
						</tr>
			<?php
						while($row = $db_info_getter->fetch(PDO::FETCH_ASSOC))
						{
			?>
							<tr>
								<td>
									<?php echo $row['id_user'];?>
								</td>
								<td>
									<?php echo $row['fio'];?>
								</td>
								<td>
									<?php echo $row['degree'];?>
								</td>
								<td>
									<?php echo $row['department'];?>
								</td>
								<td>
									<form name = "lecturer_admin_remove_post" action = "" method = "POST">
										<input type = "hidden" name = "remove_lecturer_field" value = "<?= $row['id_user']?>"></input>
										<input type = "submit" name = "remove_lecturer_button" value = "Удалить"/>
									</form>
								</td>
							</tr>
				<?php
						}
				?>
					</table>
				</div>
				<br/>
				<div class = "add_new_lecturer_place" style = "border: ridge 1px black;">
					<label>Добавление новой записи:</label>
					<br/>
					<?php //<form name = "add_new_lecturer_form" action = "" method = "POST"> ?>
					<div class = "new_lecturer_name_field">
						<label class = "new_lecturer_name_label">ФИО:</label>
						<br/>
						<input type = "text" name = "new_lecturer_record_name" value = ""></input>
					</div>
					<div class = "new_lecturer_degree_field">
						<label class = "new_lecturer_degree_label">Ученая степень:</label>
						<br/>
						<input type = "text" name = "new_lecturer_record_degree" value = ""></input>
					</div>
					<div class = "new_lecturer_department_field">
						<label class = "new_lecturer_department_label">Введите кафедру:</label>
						<select name = "new_lecturer_record_department">
							<?php
							$get_all_lecturer_department_request = "Select department from schedule.department where faculty = '".$_POST['choosen_faculty']."';";
							$get_all_lecturer_department = $server_connect_pdo->query($get_all_lecturer_department_request);
							while($row = $get_all_lecturer_department->fetch(PDO::FETCH_ASSOC))
							{
							?>
								<option value = "<?= $row['department']?>"><?php echo $row['department'];?></option>
							<?php
							}
							?>
						</select>
					</div>
					<br/>
					<input type = "submit" name = "add_new_lecturer_button" value = "Добавить"/>
					<?php //</form>?>
				</div>
			</form>
		</div>
		<?lecturer_choose_form END*/?>
		<br/>
		<?//faculty_add_form BEGIN?>
		<div id = "faculty_add_div" style = "border: ridge 5px black;">
			<form name = "faculty_choose_form" action = "" method = "POST">
			<?php
				$db_info_getter_request = "Select * from schedule.faculty;";
				$db_info_getter = $server_connect_pdo->query($db_info_getter_request);
							
			?>
				<div class = "table_content_list">
					<table border = '1'>
						<tr>
							<td align = 'center'>Имя</td>
							<td align = 'center'>Функции</td>
						</tr>
			<?php
						while($row = $db_info_getter->fetch(PDO::FETCH_ASSOC))
						{
			?>
							<tr>
								<td>
									<?php echo $row['name'];?>
								</td>
								<td>
									<form name = "faculty_admin_remove_post" action = "" method = "POST">
										<input type = "hidden" name = "remove_faculty_field" value = "<?= $row['name']?>"></input>
										<input type = "submit" name = "remove_faculty_button" value = "Удалить"/>
									</form>
								</td>
							</tr>
			<?php
						}
			?>
					</table>
				</div>
				<br/>
				<div class = "add_new_faculty_place" style = "border: ridge 1px black;">
					<label>Добавление новой записи:</label>
					<br/>
					<form name = "add_new_faculty_form" action = "" method = "POST">
						<div class = "new_faculty_name_field">
							<label class = "new_faculty_name_label">Название:</label>
							<input type = "text" name = "new_faculty_record_name" value = ""/>
						</div>
						<br/>
						<input type = "submit" name = "add_new_faculty_button" value = "Добавить"/>
					</form>
				</div>					
				<?php
					/*if(isset($_POST['choosen_faculty']))
						{
							$check_if_choosen_faculty_exists_request = "Select count(name) as count from schedule.faculty where name = '".$_POST['choosen_faculty']."';";
							$check_if_choosen_faculty_exists = $server_connect_pdo->query($check_if_choosen_faculty_exists_request);
							$row = $check_if_choosen_faculty_exists->fetch(PDO::FETCH_ASSOC);
							echo "res =".$row['count'];
						}*/
				?>
			</form>
		</div>
		<?//faculty_add_form END?>
		<br/>
		<div id = "admin_panel" style = "border: ridge 5px black;">
			<label>Вы сейчас работаете с факультетом: <?php echo $_POST['choosen_faculty'];?></label>
			<form name = "faculty_change_form" action = "" method = "POST">
				<div class = "faculty_choose_field">
					<label>Выберите факультет для работы: </label>
					<select name = "choosen_faculty">
		<?php
						if(isset($_POST['choosen_faculty']))
						{
							$check_if_choosen_faculty_exists_request = "Select count(name) as count from schedule.faculty where name = '".$_POST['choosen_faculty']."';";
							$check_if_choosen_faculty_exists = $server_connect_pdo->query($check_if_choosen_faculty_exists_request);
							$row = $check_if_choosen_faculty_exists->fetch(PDO::FETCH_ASSOC);
							if($row['count'] > 0)
							{
		?>
								<option value = "<?= $_POST['choosen_faculty']?>"><?php echo $_POST['choosen_faculty'];?></option>
		<?php
						}
							}
						$get_all_faculty_names_request = "Select name from schedule.faculty where name != '".$_POST['choosen_faculty']."';";
						$get_all_faculty_names = $server_connect_pdo->query($get_all_faculty_names_request);
						while($row = $get_all_faculty_names->fetch(PDO::FETCH_ASSOC))
							{
		?>
								<option value = "<?= $row['name']?>"><?php echo $row['name'];?></option>
		<?php
							}
		?>
					</select>
				</div>
				<input type = "submit" name = "faculty_choose_button" value = "Войти в режим редактирования"/>
			</form>

		<br/>
	
	<?php
		//$admin_panel_access_flag = false;
		if((isset($_POST['choosen_faculty']))&&(!isset($_POST['remove_faculty_button'])))
		{
			//$admin_panel_access_flag = true;		
		?>
				<form name = "admin_form" action = "" method = "POST">

						<input type = "hidden" name = "choosen_faculty" value = "<?= $_POST['choosen_faculty']?>"/>
					
					<div id = "list_of_tables">
						<input type = "submit" name = "announsment_admin_page" value = "Announsment admin page"/>
						<input type = "submit" name = "advert_admin_page" value = "Advert admin page"/>
						<input type = "submit" name = "class_admin_page" value = "Class admin page"/>
						<input type = "submit" name = "department_admin_page" value = "Department admin page"/>
						<input type = "submit" name = "group_admin_page" value = "Group admin page"/>
						<input type = "submit" name = "lecturer_admin_page" value = "Lecturer admin page"/>
						<input type = "submit" name = "lesson_admin_page" value = "Lesson admin page"/>
						<input type = "submit" name = "speciality_admin_page" value = "Speciality admin page"/>
					</div>
		<?php
					//$db_info_getter_request = "Select * from schedule.";
					if(isset($_POST['announsment_admin_page']))
					{
						//$db_info_getter_request += "announcement;";
						$db_info_getter_request = "Select * from schedule.announcement where faculty = '".$_POST['choosen_faculty']."';";
						$db_info_getter = $server_connect_pdo->query($db_info_getter_request);
		?>
						<div class = "table_content_list">
							<table border = '1'>
								<tr>
									<td align = 'center'>Ид</td>
									<td align = 'center'>Дата</td>
									<td align = 'center'>Лектор</td>
									<td align = 'center'>Объявление</td>
									<td align = 'center'>Предмет</td>
									<td align = 'center'>Функции</td>
								</tr>
		<?php
								while($row = $db_info_getter->fetch(PDO::FETCH_ASSOC))
								{
		?>
									<tr>
										<td>
											<?echo $row['id_ann'];?>
										</td>
										<td>
											<?echo $row['date'];?>
										</td>
										<td>
											<?
												$selecter_lecturer_request = "Select fio, department from schedule.lecturer where id_user = '".$row['lecturer']."';";
												$selecter_lecturer = $server_connect_pdo->query($selecter_lecturer_request);
												while($secound_row = $selecter_lecturer->fetch(PDO::FETCH_ASSOC))
												{
													echo $secound_row['fio']." (".$secound_row['department'].")";
												}
											?>
										</td>
										<td>
											<?echo $row['ann'];?>
										</td>
										<td>
											<?echo $row['class'];?>
										</td>
										<td>
											<form name = "announsment_admin_remove_post" action = "" method = "POST">
												<input type = "hidden" name = "remove_announsment_field" value = "<?= $row['id_ann']?>"></input>
												<input type = "submit" name = "remove_announsment_button" value = "Удалить"/>
											</form>
										</td>
									</tr>
		<?php
								}
		?>
							</table>
						</div>
						<br/>
						<div class = "add_new_announsment_place" style = "border: ridge 1px black;">
							<label>Добавление новой записи:</label>
							<br/>
							
							<?php
							/*<form name = "add_new_announcement_form" action = "" method = "POST">
							
								<input type = "hidden" name = "choosen_faculty" value = "<?= $_POST['choosen_faculty']?>"/>*/
							?>
							
								<div class = "new_announsment_date_field">
									<label class = "new_announsment_date_label">Дата:</label>
									<input type = "date" name = "new_announsment_record_date" value = ""/>
								</div>
								<div class = "new_announsment_lector_field">
									<label class = "new_announsment_lector_label">Лектор:</label>
									<select name = "new_announsment_record_lector">
										<?php
											$get_lecturer_list_request = "Select id_user, fio from schedule.lecturer;";
											$get_lecturer_list = $server_connect_pdo->query($get_lecturer_list_request);
											while($row = $get_lecturer_list->fetch(PDO::FETCH_ASSOC))
											{
										?>
											<option value = "<?= $row['id_user'];?>"><?php echo $row['fio'];?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div class = "new_announsment_announcement_field">
									<label class = "new_announsment_announcement_label">Объявление:</label>
									<br/>
									<textarea name = "new_announsment_record_announcement" cols = "40" rows = "3" style = "resize: none;"></textarea>
								</div>
								<div class = "new_announsment_subject_field">
									<label class = "new_announsment_subject_label">Предмет:</label>
									<select name = "new_announsment_record_subject">
										<?php
											$get_subject_list_request = "Select name from schedule.class where faculty = '".$_POST['choosen_faculty']."';";
											$get_subject_list = $server_connect_pdo->query($get_subject_list_request);
											while($row = $get_subject_list->fetch(PDO::FETCH_ASSOC))
											{
										?>
											<option value = "<?= $row['name'];?>"><?php echo $row['name'];?></option>
										<?php
											}
										?>
									</select>
								</div>
								<br/>
								<input type = "submit" name = "add_new_announcement_button" value = "Добавить"/>
							<?php //</form>?>
						</div>
		<?php
					}
					else if(isset($_POST['advert_admin_page']))
					{
						$db_info_getter_request = "Select * from schedule.advert where faculty = '".$_POST['choosen_faculty']."';";
						$db_info_getter = $server_connect_pdo->query($db_info_getter_request);
		?>
						<div class = "table_content_list">
							<table border = '1'>
								<tr>
									<td align = 'center'>Ид</td>
									<td align = 'center'>Дата</td>
									<td align = 'center'>Анонс</td>
									<td align = 'center'>Предмет</td>
									<td align = 'center'>Функции</td>
								</tr>
		<?php
								while($row = $db_info_getter->fetch(PDO::FETCH_ASSOC))
								{
		?>
									<tr>
										<td>
											<?echo $row['id_ad'];?>
										</td>
										<td>
											<?echo $row['date'];?>
										</td>
										<td>
											<?echo $row['ad'];?>
										</td>
										<td>
											<?echo $row['class'];?>
										</td>
										<td>
											<form name = "advert_admin_remove_post" action = "" method = "POST">
												<input type = "hidden" name = "remove_advert_field" value = "<?= $row['id_ad']?>"></input>
												<input type = "submit" name = "remove_advert_button" value = "Удалить"/>
											</form>
										</td>
									</tr>
		<?php
								}
		?>
							</table>
						</div>
						<br/>
						<div class = "add_new_advert_place" style = "border: ridge 1px black;">
							<label>Добавление новой записи:</label>
							<br/>
							<?php //<form name = "add_new_advert_form" action = "" method = "POST"> ?>
								<div class = "new_advert_date_field">
									<label class = "new_advert_date_label">Дата:</label>
									<input type = "date" name = "new_advert_record_date" value = ""/>
								</div>
								<div class = "new_advert_advert_field">
									<label class = "new_advert_advert_label">Анонс:</label>
									<br/>
									<textarea name = "new_advert_record_advert" cols = "40" rows = "3" style = "resize: none;"></textarea>
								</div>
								<div class = "new_advert_subject_field">
									<label class = "new_advert_subject_label">Предмет:</label>
									<select name = "new_advert_record_subject">
										<?php
											$get_subject_list_request = "Select name from schedule.class where faculty = '".$_POST['choosen_faculty']."';";
											$get_subject_list = $server_connect_pdo->query($get_subject_list_request);
											while($row = $get_subject_list->fetch(PDO::FETCH_ASSOC))
											{
										?>
											<option value = "<?= $row['name'];?>"><?php echo $row['name'];?></option>
										<?php
											}
										?>
									</select>
								</div>
								<br/>
								<input type = "submit" name = "add_new_advert_button" value = "Добавить"/>
							<?php //</form>?>
						</div>
		<?php
					}
					else if(isset($_POST['class_admin_page']))
					{
						$db_info_getter_request = "Select * from schedule.class where faculty = '".$_POST['choosen_faculty']."';";
						$db_info_getter = $server_connect_pdo->query($db_info_getter_request);
		?>
						<div class = "table_content_list">
							<table border = '1'>
								<tr>
									<td align = 'center'>Название</td>
									<td align = 'center'>Функции</td>
								</tr>
		<?php
								while($row = $db_info_getter->fetch(PDO::FETCH_ASSOC))
								{
		?>
								<tr>
									<td>
										<?php echo $row['name'];?>
									</td>
									<td>
										<?php //<form name = "class_admin_remove_post" action = "" method = "POST"> ?>
											<input type = "hidden" name = "remove_class_field" value = "<?= $row['name']?>"></input>
											<input type = "submit" name = "remove_class_button" value = "Удалить"/>
										<?php //</form> ?>
									</td>
								</tr>
		<?php
								}
		?>
							</table>
						</div>
						<br/>
						<div class = "add_new_class_place" style = "border: ridge 1px black;">
							<label>Добавление новой записи:</label>
							<br/>
							<?php //<form name = "add_new_class_form" action = "" method = "POST"> ?>
								<div class = "new_class_name_field">
									<label class = "new_class_name_label">Название:</label>
									<input type = "text" name = "new_class_record_name" value = ""/>
								</div>
								<br/>
								<input type = "submit" name = "add_new_class_button" value = "Добавить"/>
							<?php //</form>?>
						</div>
		<?php
					}
					else if(isset($_POST['department_admin_page']))
					{
						$db_info_getter_request = "Select * from schedule.department where faculty = '".$_POST['choosen_faculty']."';";
						$db_info_getter = $server_connect_pdo->query($db_info_getter_request);
		?>
						<div class = "table_content_list">
							<table border = '1'>
								<tr>
									<td align = 'center'>Название</td>
									<td align = 'center'>Функции</td>
								</tr>
		<?php
								while($row = $db_info_getter->fetch(PDO::FETCH_ASSOC))
								{
		?>
								<tr>
									<td>
										<?php echo $row['department'];?>
									</td>
									<td>
										<?php //<form name = "department_admin_remove_post" action = "" method = "POST"> ?>
											<input type = "hidden" name = "remove_department_field" value = "<?= $row['department']?>"></input>
											<input type = "submit" name = "remove_department_button" value = "Удалить"/>
										<?php //</form> ?>
									</td>
								</tr>
		<?php
								}
		?>
							</table>
						</div>
						<br/>
						<div class = "add_new_department_place" style = "border: ridge 1px black;">
							<label>Добавление новой записи:</label>
							<br/>
							<?php //<form name = "add_new_department_form" action = "" method = "POST"> ?>
								<div class = "new_department_name_field">
									<label class = "new_department_name_label">Название:</label>
									<input type = "text" name = "new_department_record_name" value = ""/>
								</div>
								<br/>
								<input type = "submit" name = "add_new_department_button" value = "Добавить"/>
							<?php //</form>?>
						</div>
		<?php	
					}
					else if(isset($_POST['group_admin_page']))
					{
						$db_info_getter_request = "Select * from schedule.group where faculty = '".$_POST['choosen_faculty']."';";
						$db_info_getter = $server_connect_pdo->query($db_info_getter_request);
		?>
						<div class = "table_content_list">
							<table border = '1'>
								<tr>
									<td align = 'center'>Ид</td>
									<td align = 'center'>Факультет</td>
									<td align = 'center'>Специальность</td>
									<td align = 'center'>Курс</td>
									<td align = 'center'>Имя группы</td>
									<td align = 'center'>Функции</td>
								</tr>
		<?php
								while($row = $db_info_getter->fetch(PDO::FETCH_ASSOC))
								{
		?>
									<tr>
										<td>
											<?php echo $row['id_group'];?>
										</td>
										<td>
											<?php echo $row['faculty'];?>
										</td>
										<td>
											<?php echo $row['speciality'];?>
										</td>
										<td>
											<?php echo $row['course'];?>
										</td>
										<td>
											<?php echo $row['group_name'];?>
										</td>
										<td>
											<form name = "group_admin_remove_post" action = "" method = "POST">
												<input type = "hidden" name = "remove_group_field" value = "<?= $row['id_group']?>"></input>
												<input type = "submit" name = "remove_group_button" value = "Удалить"/>
											</form>
										</td>
									</tr>
		<?php
								}
		?>
							</table>
						</div>
						<br/>
						<div class = "add_new_faculty_place" style = "border: ridge 1px black;">
							<label>Добавление новой записи:</label>
							<br/>
							<?php //<form name = "add_new_faculty_form" action = "" method = "POST"> ?>
								<div name = "new_group_speciality_name_field">
									<label>Специальность: </label>
									<select name = "new_group_record_speciality">
										<?php
										$get_all_speciality_names_request = "Select name_spec from schedule.speciality where faculty = '".$_POST['choosen_faculty']."';";
										$get_all_speciality_names = $server_connect_pdo->query($get_all_speciality_names_request);
										while($row = $get_all_speciality_names->fetch(PDO::FETCH_ASSOC))
										{
		?>
											<option value = "<?= $row['name_spec']?>"><?php echo $row['name_spec'];?></option>
		<?php
										}
		?>
									</select>
								</div>
								<div name = "new_group_course_name_field">
									<label>Курс: </label>
									<select name = "new_group_record_course">
		<?php
										for($i = 1; $i < 11; $i++)
										{
		?>
										<option value = "<?= $i?>"><?php echo $i;?></option>
		<?php
										}
		?>
									</select>
								</div>
								<div name = "new_group_name_field">
									<label>Имя группы: </label>
									<input type = "text" name = "new_group_record_name"></input>
								</div>
								<br/>
								<input type = "submit" name = "add_new_group_button" value = "Добавить"/>
							<?php //</form>?>	
						</div>
		<?php
					}
					else if(isset($_POST['lecturer_admin_page']))
					{
						$db_info_getter_request = "Select * from schedule.lecturer;";
						$db_info_getter = $server_connect_pdo->query($db_info_getter_request);
		?>
						<div class = "table_content_list">
							<table border = '1'>
								<tr>
									<td align = 'center'>Ид</td>
									<td align = 'center'>ФИО</td>
									<td align = 'center'>Уч. степень</td>
									<td align = 'center'>Кафедра</td>
									<td align = 'center'>Функции</td>
								</tr>
		<?php
								while($row = $db_info_getter->fetch(PDO::FETCH_ASSOC))
								{
		?>
									<tr>
										<td>
											<?php echo $row['id_user'];?>
										</td>
										<td>
											<?php echo $row['fio'];?>
										</td>
										<td>
											<?php echo $row['degree'];?>
										</td>
										<td>
											<?php echo $row['department'];?>
										</td>
										<td>
											<form name = "lecturer_admin_remove_post" action = "" method = "POST">
												<input type = "hidden" name = "remove_lecturer_field" value = "<?= $row['id_user']?>"></input>
												<input type = "submit" name = "remove_lecturer_button" value = "Удалить"/>
											</form>
										</td>
									</tr>
		<?php
								}
		?>
							</table>
						</div>
						<br/>
						<div class = "add_new_lecturer_place" style = "border: ridge 1px black;">
							<label>Добавление новой записи:</label>
							<br/>
							<?php //<form name = "add_new_lecturer_form" action = "" method = "POST"> ?>
							<div class = "new_lecturer_name_field">
								<label class = "new_lecturer_name_label">ФИО:</label>
								<br/>
								<input type = "text" name = "new_lecturer_record_name" value = ""></input>
							</div>
							<div class = "new_lecturer_degree_field">
								<label class = "new_lecturer_degree_label">Ученая степень:</label>
								<br/>
								<input type = "text" name = "new_lecturer_record_degree" value = ""></input>
							</div>
							<div class = "new_lecturer_department_field">
								<label class = "new_lecturer_department_label">Введите кафедру:</label>
								<select name = "new_lecturer_record_department">
									<?php
									$get_all_lecturer_department_request = "Select department from schedule.department where faculty = '".$_POST['choosen_faculty']."';";
									$get_all_lecturer_department = $server_connect_pdo->query($get_all_lecturer_department_request);
									while($row = $get_all_lecturer_department->fetch(PDO::FETCH_ASSOC))
									{
		?>
										<option value = "<?= $row['department']?>"><?php echo $row['department'];?></option>
		<?php
									}
		?>
								</select>
							</div>
							<br/>
							<input type = "submit" name = "add_new_lecturer_button" value = "Добавить"/>
					<?php //</form>?>
						</div>
				<?php
					}
					else if(isset($_POST['lesson_admin_page']))
					{
						$db_info_getter_request = "Select * from schedule.lesson where faculty = '".$_POST['choosen_faculty']."';";
						$db_info_getter = $server_connect_pdo->query($db_info_getter_request);
		?>
						<div class = "table_content_list">
							<table border = '1'>
								<tr>
									<td align = "center">Ид</td>
									<td align = "center">День недели</td>
									<td align = "center">Номер пары</td>
									<td align = "center">Группа</td>
									<td align = "center">Предмет</td>
									<td align = "center">Преподаватель</td>
									<td align = "center">Тип занятия</td>
									<td align = "center">Аудитория</td>
									<td align = "center">Кол-во групп на паре</td>
									<td align = "center">Четность</td>
									<td align = 'center'>Функции</td>
								</tr>
		<?php
								while($row = $db_info_getter->fetch(PDO::FETCH_ASSOC))
								{
		?>
								<tr>
									<td>
										<?php echo $row['id_lesson'];?>
									</td>
									<td>
										<?php echo $row['day'];?>
									</td>
									<td>
										<?php echo $row['class_num'];?>
									</td>
									<td>
										<?php 
											$get_group_request = "Select group_name from schedule.group where id_group = '".$row['group']."';";
											$get_group = $server_connect_pdo->query($get_group_request);
											while($second_row = $get_group->fetch(PDO::FETCH_ASSOC))
											{
												echo $second_row['group_name'];
											}
										?>
									</td>
									<td>
										<?php echo $row['class'];?>
									</td>
									<td>
										<?php 
											$get_lecturer_request = "Select fio from schedule.lecturer where id_user = '".$row['lecturer']."';";
											$get_lecturer = $server_connect_pdo->query($get_lecturer_request);
											while($second_row = $get_lecturer->fetch(PDO::FETCH_ASSOC))
											{
												echo $second_row['fio'];
											}
										?>
									</td>
									<td>
										<?php echo $row['type'];?>
									</td>
									<td>
										<?php echo $row['classroom'];?>
									</td>
									<td>
										<?php 
											echo $row['subgroup'];
											/*if($row['subgroup'] == 2)
											{
												echo "Полная группа";
											}
											else
											{
												echo $row['subgroup'];
											}*/
										?>
									</td>
									<td>
										<?php 
											if($row['parity'] == 0)
											{
												echo "Всегда";
											}
											else if($row['parity'] == 1)
											{
												echo $row['Нечетная'];
											}
											else if($row['parity'] == 2)
											{
												echo $row['Четная'];
											}
										?>
									</td>
									<td>
											<form name = "lesson_admin_remove_post" action = "" method = "POST">
												<input type = "hidden" name = "remove_lesson_field" value = "<?= $row['id_lesson']?>"></input>
												<input type = "submit" name = "remove_lesson_button" value = "Удалить"/>
											</form>
									</td>
								</tr>
		<?php
								}
		?>
							</table>
						</div>
		<?php
					}
					else if(isset($_POST['speciality_admin_page']))
					{
						$db_info_getter_request = "Select * from schedule.speciality where faculty = '".$_POST['choosen_faculty']."';";
						$db_info_getter = $server_connect_pdo->query($db_info_getter_request);
		?>
						<div class = "table_content_list">
							<table border = '1'>
								<tr>
									<td align = 'center'>Название специальности</td>
									<td align = 'center'>Факулькутет</td>
									<td align = 'center'>Функции</td>
								</tr>
		<?php
								while($row = $db_info_getter->fetch(PDO::FETCH_ASSOC))
								{
		?>
									<tr>
										<td>
											<?php echo $row['name_spec'];?>
										</td>
										<td>
											<?php echo $row['faculty'];?>
										</td>
										<td>
											<form name = "speciality_admin_remove_post" action = "" method = "POST">
												<input type = "hidden" name = "remove_speciality_field" value = "<?= $row['name_spec']?>"></input>
												<input type = "submit" name = "remove_speciality_button" value = "Удалить"/>
											</form>
										</td>
									</tr>
		<?php
								}
		?>
							</table>
						</div>
						<br/>
						<div class = "add_new_speciality_place" style = "border: ridge 1px black;">
							<label>Добавление новой записи:</label>
							<br/>
							<?php //<form name = "add_new_speciality_form" action = "" method = "POST"> ?>
								<div class = "new_speciality_name_field">
									<label class = "new_speciality_name_label">Название специальности:</label>
									<input type = "text" name = "new_speciality_record_name" value = ""/>
								</div>
								<br/>
								<input type = "submit" name = "add_new_speciality_button" value = "Добавить"/>
							<?php //</form>?>
						</div>
		<?php
					}				
		?>
				</form>
		<?php
		}
		?>
		</div>
	</body>
</html>