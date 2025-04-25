
<body>
<!-- partial:index.partial.html -->
<main class="main">
	<section class="chart" id="chartContainer">
		<figure class="chart__figure">
			<canvas class="chart__canvas" id="chartCanvas" width="160" height="160" aria-label="Example doughnut chart showing data as a percentage" role="img"></canvas>
			<figcaption class="chart__caption" style="color: <?=$_SESSION['bmi_color_no'];?>;">
				BMI&ensp;:&ensp;<?=$_SESSION['bmi_float_no'];?><span style="color: <?=$_SESSION['bmi_color_no'];?>;"><?=$_SESSION['bmi_status_no'];?><br><br><a href="BMI.php"><h3 style="color: rgb(43,48,53);text-decoration: none;">Clear</h3></a></span>
			</figcaption>
            <div class="dia12" style="height: 249px !important;border: 1px solid rgb(43,48,53);border-radius: 21px;color: aliceblue; background-color: rgb(43,48,53) !important;">
                <center><h2>Index Bar</h2></center>
                <table>
                    <tr>
                        <td>Under Weight&ensp;&ensp; &ensp; :&ensp;<button class="co21" style="background-color: rgba(3, 75, 230, 0.91);border:2px solid rgba(3, 75, 230, 0.91)"></button></td>
                    </tr>
                    <tr>
                        <td>Normal Weight&ensp;&ensp; :&ensp;<button class="co21" style="background-color: rgb(27, 168, 0);border:2px solid rgb(27, 168, 0)"></button></td>
                    </tr>
                    <tr>
                        <td>Over Weight&ensp;&ensp;&ensp;&ensp;&ensp;:&ensp;<button class="co21" style="background-color: rgb(255, 243, 0);border:2px solid rgb(255, 243, 0)"></button></td>
                    </tr>
                    <tr>
                        <td>Obese&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; :&ensp;<button class="co21" style="background-color: rgb(255, 93, 18);border:2px solid rgb(255, 93, 18)"></button></td>
                    </tr>
                    <tr>
                        <td>Extremely Obese&ensp;:&ensp;<button class="co21" style="background-color: rgb(255, 107, 107);border:2px solid rgb(255, 107, 107)"></button></td>
                    </tr>
                </table>
            </div>
		</figure>
	</section>
    
</main>
<!-- partial -->


</body>
</html>
