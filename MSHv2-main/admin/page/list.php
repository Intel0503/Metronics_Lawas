<?php
	include'../function/connect.php';

// Pagination settings
$records_per_page = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $records_per_page;

// Fetch total records
$total_sql = "SELECT COUNT(*) AS count FROM student_list";
$total_result = $conn->query($total_sql);
$total_row = $total_result->fetch_assoc();
$total_records = $total_row['count'];
$total_pages = ceil($total_records / $records_per_page);

// Debug: Print SQL Query
echo "SELECT id, name, gender, student_number, strand, year_level FROM student_list LIMIT $offset, $records_per_page<br>";

// Prepare statement for fetching students
$stmt = $conn->prepare("SELECT id, name, gender, student_number, strand, year_level FROM student_list LIMIT ?, ?");
$stmt->bind_param("ii", $offset, $records_per_page);
$stmt->execute();
$result = $stmt->get_result();

// Debug: Check if the query returned any results
if ($result->num_rows > 0) {
    echo "Data found:<br>";
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Gender: " . $row['gender'] . "<br>";
    }
} else {
    echo "No students found";
}


?>

<style>
        body {
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: greenyellow;
        }
        .table thead {
            background-color: #EBF4F6;
            color: black;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }
        .table-hover tbody tr:hover {
            background-color: #e9ecef;
        }
        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>
<body>

<div class="container-fluid border border-light rounded-top bg-light">
    <h2 class="text-center mb-4">Student List</h2> <br>
    <div class="table-responsive">
        <table class="table table-striped table-hover flex justify-content-center">
            <thead class="h2">
                <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Student Number</th>
                        <th>Strand</th>
                        <th>Year Level</th>
                </tr>
            </thead>
            <tbody class="h5">
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                        <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['student_number']; ?></td>
                                <td><?php echo $row['strand']; ?></td>
                                <td><?php echo $row['year_level']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center">No students found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>">
                <a class="page-link" href="<?php if($page > 1){ echo "?page=".($page - 1); } ?>">Previous</a>
            </li>
            <?php for($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?php if($page == $i){ echo 'active'; } ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
            <li class="page-item <?php if($page >= $total_pages){ echo 'disabled'; } ?>">
                <a class="page-link" href="<?php if($page < $total_pages){ echo "?page=".($page + 1); } ?>">Next</a>
            </li>
        </ul>
    </nav>
</div>
</body>
</html>

