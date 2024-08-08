<!-- resources/views/search.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: #fff; 
            border: 1px solid #ddd; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            
        }
        
        .search-box {
            margin-bottom: 20px;
            width: 100%;
        }
        .search-box input[type="text"] {
            width: 100%; 
            padding: 10px; 
            box-sizing: border-box; 
        }
        .box {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); 
            gap: 10px; 
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; 
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h3>Search</h3>
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Search name/designation/department" class="form-control">
        </div>

        <div id="results"class="grid-container">
        
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            
            const data = [
                { name: "jhon due", designation: "Marketing Manager", department: "sales and marketing" },
                { name: "jhon due", designation: "marketing manager", department: "sales and marketing" },
                { name: "Tommy mark", designation: "Mobile Application Development", department: "Application Development" },
                {name: "Tommy mark", designation: "Mobile Application Development", department: "Application Development"}
            ];

            function renderResults(results) {
                $('#results').empty();
                results.forEach(item => {
                    $('#results').append(`
                        <div class="box">
                            <strong>Name:</strong> ${item.name} <br>
                            <strong>Designation:</strong> ${item.designation} <br>
                            <strong>Department:</strong> ${item.department}
                        </div>
                    `);
                });
            }

            // Initial render
            renderResults(data);

            // Search functionality
            $('#searchInput').on('input', function() {
                const query = $(this).val().toLowerCase();
                const filteredData = data.filter(item => {
                    return item.name.toLowerCase().includes(query) ||
                           item.designation.toLowerCase().includes(query) ||
                           item.department.toLowerCase().includes(query);
                });
                renderResults(filteredData);
            });
        });
    </script>
    
</body>
</html>
