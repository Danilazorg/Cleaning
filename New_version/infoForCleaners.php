<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web&Quest</title>
	<link rel="stylesheet" href="css/adapt.css">
	<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css'>
	<link rel='stylesheet' href='css/tabl.css' type='text/css'>
</head>
<body class="d-flex flex-column h-100">
<center>
        <table id="tablepress-16" class="tablepress tablepress-id-16">
                                                    <thead>
                                                        <tr class="row-1 odd">
                                                            <th class="column-1">ID заявки</th>
                                                            <th class="column-2">Имя</th>
                                                            <th class="column-3">Телефон</th>
                                                            <th class="column-4">Адрес</th>
                                                            <th class="column-5">КВ/М</th>
                                                            <th class="column-6">Примечание</th>
                                                            <th class="column-7">Заявка рассмотрена</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                       
                                                       $link = new mysqli('localhost', 'e92579fm_dp', '%d2EVoLk', 'e92579fm_dp');
                                                       $link->set_charset("utf8");
									                         if (mysqli_connect_errno()) {
									                             printf("ОШИБКА", mysqli_connect_error());
									                             exit;
									                         }
									                         $link->set_charset("utf8");
									                         $result = $link->query("SELECT id, name, phone, address, quantity, comment, done FROM cleaning WHERE done ='На исполнении'");
									                         while($article = $result->fetch_assoc()) {
									                   echo '
                                                        <tr class="row-2 even">
                                                            <td class="column-1">'.$article['id'].'</td>
                                                            <td class="column-2">'.$article['name'].'</td>
                                                            <td class="column-3">'.$article['phone'].'</td>
                                                            <td class="column-4">'.$article['address'].'</td>
                                                            <td class="column-5">'.$article['quantity'].'</td>
                                                            <td class="column-6">'.$article['comment'].'</td>
                                                            <td class="column-7">'.$article['done'].'</td>

                                                            <td class="column-8">
                                                            <form name="form" action="" method="post">
                                                        
                                                                
                                                            <button name="submit">Заказ завершен</button>
                        
                                                                <input type="hidden" name="itemIdTwo" value="'.$article['id'].'">
                                                            
                                                            </form>
                                                            
                                                            </td>
                                                            </td>
                                                        </tr>';
									                   }
                                                        if (isset($_POST['itemIdTwo'])) {
                                                            $id = $_POST['itemIdTwo'];
                                                            $result = $link->query("UPDATE cleaning SET done = 'Завершен' WHERE id=${id}");
                                                        }

                                                        ?>
                                                    </tbody>
                                                </table>
                                                
          <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
}
</script>
</center>
</body>
</html>