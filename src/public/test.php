<?php
// Data awal dalam array asosiatif
$data = [
     ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
     ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com']
];

// Fungsi untuk menampilkan data
function readData($data)
{
     echo "<h3>Data List</h3>";
     echo "<table border='1' cellpadding='10'>";
     echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>";
     foreach ($data as $row) {
          echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>
                    <a href='?action=edit&id={$row['id']}'>Edit</a> | 
                    <a href='?action=delete&id={$row['id']}'>Delete</a>
                </td>
            </tr>";
     }
     echo "</table>";
}

// Fungsi untuk menambahkan data
function createData(&$data, $name, $email)
{
     $newId = end($data)['id'] + 1;
     $data[] = ['id' => $newId, 'name' => $name, 'email' => $email];
     echo "<p>Data berhasil ditambahkan.</p>";
}

// Fungsi untuk mengedit data
function updateData(&$data, $id, $name, $email)
{
     foreach ($data as &$row) {
          if ($row['id'] == $id) {
               $row['name'] = $name;
               $row['email'] = $email;
               echo "<p>Data berhasil diperbarui.</p>";
               return;
          }
     }
     echo "<p>Data tidak ditemukan.</p>";
}

// Fungsi untuk menghapus data
function deleteData(&$data, $id)
{
     foreach ($data as $key => $row) {
          if ($row['id'] == $id) {
               unset($data[$key]);
               echo "<p>Data berhasil dihapus.</p>";
               return;
          }
     }
     echo "<p>Data tidak ditemukan.</p>";
}

// Logika CRUD berdasarkan aksi
$action = $_GET['action'] ?? null;
if ($action === 'create' && isset($_POST['name'], $_POST['email'])) {
     createData($data, $_POST['name'], $_POST['email']);
} elseif ($action === 'edit' && isset($_POST['id'], $_POST['name'], $_POST['email'])) {
     updateData($data, $_POST['id'], $_POST['name'], $_POST['email']);
} elseif ($action === 'delete' && isset($_GET['id'])) {
     deleteData($data, $_GET['id']);
}

// Form input untuk create/edit
$id = $_GET['id'] ?? '';
$name = '';
$email = '';
if ($action === 'edit') {
     foreach ($data as $row) {
          if ($row['id'] == $id) {
               $name = $row['name'];
               $email = $row['email'];
          }
     }
}

?>

<h3><?php echo $action === 'edit' ? 'Edit' : 'Create'; ?> Data</h3>
<form method="post" action="?action=<?php echo $action === 'edit' ? 'edit' : 'create'; ?>">
     <input type="hidden" name="id" value="<?php echo $id; ?>">
     <label>Name: <input type="text" name="name" value="<?php echo $name; ?>"></label><br>
     <label>Email: <input type="text" name="email" value="<?php echo $email; ?>"></label><br>
     <button type="submit"><?php echo $action === 'edit' ? 'Update' : 'Add'; ?></button>
</form>

<?php
// Menampilkan data
readData($data);
?>