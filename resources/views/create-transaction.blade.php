<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Page</title>
</head>
<body>
    <h1>Create</h1>

    <form action="{{ route ('storeTransaction')}}" method="POST">
    
        @csrf 
        <label form="transaction_title"> Transaction Title: </label>
        <input type="text" id="transaction_title" name="transaction_title" required>
        <br>
        <label form="description"> Description: </label>
        <input type="text" id="description" name="description" required>
        <br>
        <label form="status">Status: </label>
        <select id="status" name="status">
            <option value="successful"> successful</option>
            <option value="declined"> declined</option>
        </select>
        <br>
        <label form="total_amount"> Total Amount: </label>
        <input type="text" id="total_amount" name="total_amount" required>
        <br>
        <label form="transaction_number"> Transaction Number: </label>
        <input type="text" id="transaction_number" name="transaction_number" required>
        <br>
         
    <button type="submit"> Create </button>
    </form>

    <form action="{{ route('showAll') }}" method="GET">
        <button type="submit">Home</button>
    </form>
</body>
</html>