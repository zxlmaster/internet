<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=no">
	<link rel="stylesheet" href="/css/internet-back.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<title>互联网+ 后台管理系统</title>
</head>
<body>
	<div id="content">
		<header id="header">
			<div class="container">
				<h1>互联网+</h1>
				<h2>实践基地实训后台管理系统</h2>
			</div>
		</header>
		<div class="container">
			<a href="#nav" class="open toggle-btn">
				<i class="fa fa-reorder"></i>
			</a>
			<nav id="nav">
				<ul>
					<li><a href="/background/StudentInfo/">学生管理</a></li>
					<li><a href="/background/TeacherInfo/" class="active">教师管理</a></li>
					<li><a href="/background/CoursesList/">课程管理</a></li>
					<li><a href="/background/index/">个人信息</a></li>
                    <li><a href="/site/logout/">退出</a></li>
					<a href="#top" class="close toggle-btn"><i class="fa fa-remove"></i></a>
				</ul>
			</nav>
			<!-- 主体 -->
			<div id="mainbody" class="clean">
                <div class="btns">
                    <a href="/background/AddTeacherInfo" class="btn blue">新增教师</a>
                </div>
				<h3>在校老师</h3>
				<table>
					<tr>
						<th>工号</th>
						<th>教师名</th>
						<th>操作</th>
					</tr>
                    <?php foreach($teacher as $val){?>
					<tr>
						<td><?php echo $val->job_number;?></td>
						<td><?php echo $val->username;?></td>
						<td class="big-td">
							<a href="/background/UpdateTeacherInfo?id=<?php echo $val->id; ?>" class="btn blue small">修改</a>
                            <a href="/background/DelTeacherInfo?id=<?php echo $val->id; ?>" class="btn red small">删除</a>
						</td>
					</tr>
                    <?php }?>
				</table>
                <?php if(isset($teacher)){?>
                    <div class="pages">
                        <?php $this->widget('CLinkPager',array( 'header'=>'', 'prevPageLabel' => '上一页', 'nextPageLabel' => '下一页', 'firstPageLabel' => false, 'lastPageLabel' => false,'pages' => $pages, 'maxButtonCount'=>5, 'htmlOptions'=>array ('class'=>'pager') ) ); ?>
                    </div>
                <?php }?>
			</div>
		</div>
	</div>
	<footer id="footer" style="clear: both;">
		<div class="container">
			<h5>&copy; Copyright 互联网+ </h5>
		</div>
	</footer>
</body>
</html>