<?php
// Include config file
require_once "config.php";

// Function to safely check if table exists
function tableExists($link, $tableName) {
    $result = mysqli_query($link, "SHOW TABLES LIKE '$tableName'");
    return ($result && mysqli_num_rows($result) > 0);
}

// Function to create employees table with sample data
function initializeEmployeesTable($link) {
    // SQL to create table
    $createSql = "CREATE TABLE employees (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        address VARCHAR(255) NOT NULL,
        salary INT(10) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
    
    if(!mysqli_query($link, $createSql)) {
        throw new Exception("Failed to create table: " . mysqli_error($link));
    }
    
    // Insert sample data
    $sampleEmployees = [
        ['John Smith', '123 Main St, New York, NY', 75000],
        ['Jane Doe', '456 Oak Ave, Boston, MA', 82000]
    ];
    
    foreach ($sampleEmployees as $employee) {
        $name = mysqli_real_escape_string($link, $employee[0]);
        $address = mysqli_real_escape_string($link, $employee[1]);
        $salary = (int)$employee[2];
        
        $insertSql = "INSERT INTO employees (name, address, salary) 
                     VALUES ('$name', '$address', $salary)";
        
        if(!mysqli_query($link, $insertSql)) {
            throw new Exception("Failed to insert sample data: " . mysqli_error($link));
        }
    }
    return true;
}

// Main execution
try {
    // Check if table exists, if not create it
    if(!tableExists($link, 'employees')) {
        initializeEmployeesTable($link);
        // Set success message to display after redirect
        $_SESSION['success_message'] = "Employees table created successfully with sample data";
        // Redirect to clear POST data and avoid resubmission
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
    
    // Display success message if set
    if(isset($_SESSION['success_message'])) {
        echo '<div class="alert alert-success">'.$_SESSION['success_message'].'</div>';
        unset($_SESSION['success_message']);
    }
    
    // Continue with normal page rendering...
} catch(Exception $e) {
    die('<div class="alert alert-danger">Error: '.$e->getMessage().'</div>');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .wrapper{ width: 600px; margin: 0 auto; }
        table tr td:last-child{ width: 120px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="float-left">Employees Details</h2>
                        <a href="create.php" class="btn btn-success float-right">
                            <i class="fa fa-plus"></i> Add New Employee
                        </a>
                    </div>
                    
                    <?php
                    // Display employee records
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)) {
                        if(mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead><tr>
                                    <th>#</th><th>Name</th>
                                    <th>Address</th><th>Salary</th>
                                    <th>Actions</th>
                                </tr></thead><tbody>";
                                
                                while($row = mysqli_fetch_array($result)) {
                                    echo "<tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['name']}</td>
                                        <td>{$row['address']}</td>
                                        <td>{$row['salary']}</td>
                                        <td>
                                            <a href='read.php?id={$row['id']}' class='mr-3' title='View'><i class='fa fa-eye'></i></a>
                                            <a href='update.php?id={$row['id']}' class='mr-3' title='Update'><i class='fa fa-pencil'></i></a>
                                            <a href='delete.php?id={$row['id']}' title='Delete'><i class='fa fa-trash'></i></a>
                                        </td>
                                    </tr>";
                                }
                                echo "</tbody></table>";
                        } else {
                            echo '<div class="alert alert-info">No employees found. Add some using the button above.</div>';
                        }
                        mysqli_free_result($result);
                    } else {
                        echo '<div class="alert alert-danger">Error fetching employees: '.mysqli_error($link).'</div>';
                    }
                    
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>