<?php
require_once 'Database.php';

class QnaEditor {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getQuestionAndAnswer($id) {
        $query = "SELECT * FROM faq WHERE id = ?";
        $statement = $this->conn->prepare($query);
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return null;
        }
    }
}

// Создаем экземпляр класса Database для подключения к базе данных
$db = new Database();
$conn = $db->getConnection();

// Создаем экземпляр класса QnaEditor
$qna_editor = new QnaEditor($conn);

// Получаем ID вопроса из параметра GET
$id = $_GET['id'];

// Получаем данные о вопросе и ответе из базы данных
$qna_data = $qna_editor->getQuestionAndAnswer($id);

// Закрываем соединение с базой данных
$conn->close();
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit FAQ | HR</title>
    <!-- Подключение стилей и скриптов -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="icon" href="img/logoR.ico">
</head>
<body>
<?php include 'components/header.php'?>
<main>
    <br><br>
    <!-- Форма для редактирования вопроса и ответа -->
    <p class="thm" style="font-size: 180%">Edit Question</p>
    <br>
    <div class="otazky">
        <form action="updateEngine.php" id="otazky" method="post">
            <br>
            <!-- Скрытое поле для передачи идентификатора вопроса -->
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <div>
                <label for="question">UPDATE QUESTION:</label>
                <input class="inp" type="text" id="question" name="question" value="<?php echo $qna_data['question']; ?>" required />
                <br /><br />
                <label for="answer">UPDATE ANSWER:</label>
                <input class="inp" type="text" id="answer" name="answer" value="<?php echo $qna_data['answer']; ?>" required />
                <br /><br />
                <button type="submit">POST</button>
            </div>

        </form>
    </div>

</main>
<?php include 'components/footer.php'?>
<!-- Подключение скриптов -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
<style>
    .otazky {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: -80px;
    }
    .otazky form {
        margin: 6%;
        padding: 4%;
        padding-top: 3%;

        width: 50%;
        box-shadow: 1px 5px 20px rgba(0, 0, 0, 0.3);
        border-radius: 15px 15px 15px 15px;
    }
    .otazky .thm {
        padding: 10%;
    }
    label {
        font-family: helvetica;
        font-weight: 600;
        font-size: 70%;
    }
    .inp {
        border: 2px solid #ffffff00;
        border-radius: 5px;
        background-color: #f0f0f0;
        height: 2.5em;
        padding: 8px;
        margin-bottom: 10px;
        width: 80%;
        margin-left: 10%;
    }
    input[type="checkbox"] {
        height: 1em;
        width: 1em;
        margin-left: 0%;
    }
    button {
        padding: 8px;
        padding-left: 20px;
        padding-right: 20px;
        background-color: #500505;
        color: aliceblue;
        border-radius: 5px;
        border: none;
        font-size: 15px;
        transition: background-color 0.3s ease;
    }
    button:hover {
        background-color: #5f0a0a;
    }
</style>
</body>
</html>
