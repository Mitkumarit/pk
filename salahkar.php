 <link href="css/bootstrap.min.css" rel="stylesheet">

<?php $active = "salahkar" ?>
<?php
	include "header.php";
?><br>
<div>
	<h4 ><font color="red" > <marquee> નોંધ: ખેડૂત મિત્રો આ પેજ મા તમને વિવિધ જીલ્લા ના અલગ અલગ હોદ્દા વાળા અધિકારી ઑ નો સંપર્ક કરી શકશો... </marquee> </font></h4>
</div>
<div class="container">
	<div class="row">
		<div class="col-3">
		<script>
                    window.embeddedChatbotConfig = {
                    chatbotId: "H9oD1ZrmVa0b8Kd7j0gGb",
                    domain: "www.chatbase.co"
                    }
                    </script>
                    <script
                    src="https://www.chatbase.co/embed.min.js"
                    chatbotId="H9oD1ZrmVa0b8Kd7j0gGb"
                    domain="www.chatbase.co"
                    defer>
                    </script>
			<?php include "connection.php";
			$s = mysqli_query($con,"select distinct category from salahkaro");
			while($r = mysqli_fetch_array($s))
			{
			?>
            <div style="padding-bottom: 10px;font-size:20px !important;">
                <table>
                    <tr> <td>
                    <a href="salahkar.php?a=<?php echo $r['category'];?>"><?php echo $r['category']; ?></a>
                    </td> </tr>
                </table>
            </div>

			<?php
			}
			?>
		</div>

			<?php
			if(isset ($_GET['a']))
			{

				include "connection.php";
		 		$c = $_GET['a'];
				$s = mysqli_query($con,"select * from salahkaro where category='$c'");
			?>
			<div class="col-9">
			<table border=1 width="100%" class="salahkar-table more_detail">
				<tr >
					<th>	જીલ્લો</th>
					<th>	હોદ્દો</th>
					<th>	<?php echo $c; ?> નામ</th>
					<th>	ફોન</th>

				</tr>
			<?php

				while($r = mysqli_fetch_array($s))
				{
			?>
				<tr>
					<td><?php echo $r['city']; ?></td>
					<td><?php echo $r['hodo']; ?></td>
					<td><?php echo $r['name']; ?></td>
					<td><?php echo $r['phone']; ?></td>

				</tr>
			<?php
			}
			?>
			</table>

		<?php } ?>
		</div>
	</div>

</div>

<?php
	include "footer.php";
?>
