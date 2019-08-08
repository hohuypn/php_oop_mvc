
<?php foreach ($search as $row): ?>
	<tr>
		<td ><?php echo $row['student_id'] ?></td>
		<td ><?php echo $row['Name'] ?></td>
		<td ><?php echo $row['BOD'] ?></td>                               
		<td ><?php echo $row['Gender'] ?></td>
		<td><?php echo $row['Address'] ?></td>
		<td style="text-align: center;"><?php echo $row['Phone'] ?></td>
		<td style="text-align: center;"><?php echo "<img  src='" . $row['Image'] . "' heigh='100px' width='100px'>" ?></td>
		<td style="text-align: center;"><?php echo $row['ClassName'] ?></td>
		<td style="text-align: center;">
			<a  href="index.php?controller=Student&action=edit&id=<?php echo $row['student_id'] ?>" title="Cập nhật thông tin lớp">Sửa</span></a> |
			<a onclick="return confirm('Bạn có chắc chẵn muốn xóa không?')" href="index.php?controller=Student&action=delete&id=<?php echo $row['student_id']; ?>" title="Xóa thông tin lớp">Xóa</a>
		</td>
	</tr>
	<?php endforeach ?>