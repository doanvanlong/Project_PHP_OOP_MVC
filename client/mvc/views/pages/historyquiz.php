<header class="py-4 py-md-5" style="background-image: none;">
    <div class="container text-center py-xl-2">
        <h1 class="display-4 fw-semi-bold mb-0">Lịch sử Quiz</h1>

    </div>
    <!-- Img -->
    <img class="d-none img-fluid" src="...html" alt="...">
</header>

<!-- ABOUT V1
    ================================================== -->
<div class="container pb-4 pb-xl-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Môn học</th>
                <th>Điểm</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data['result'] as $quiz) {
            ?>
                <tr>
                    <td scope="row"><?=$quiz['id']?></td>
                    <td><a href="../../quiz/first/<?=$quiz['id_subject']?>"><?=$quiz['subject_name']?></a></td>
                    <td><?=$quiz['score']?></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>