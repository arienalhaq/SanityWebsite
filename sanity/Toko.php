<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mitra Toko</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="myapp">
        <div class="container">
            <h1 class="fleft">Toko</h1>
            <button class="button" @click="showingAddModal=true">Add New</button>
            <div class="clear"></div>
            <hr>
            <p class="successMessage" v-if="successMessage">{{successMessage}}</p>
            <p class="errorMessage" v-if="errorMessage">{{errorMessage}}</p>
            <table class="list">
                <tr>
                    <th>ID</th>
                    <th>Nama Toko</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr v-for="user in users">
                    <td>{{user.id}}</td>
                    <td>{{user.username}}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.phone}}</td>
                    <td><button class="button" @click="showingEditModal=true; selectUser(user);">Edit</button></td>
                    <td><button class="button" @click="showingDeleteModal=true; selectUser(user);">Delete</button></td>
                </tr>
            </table>

        <div class="modal" id="addModal" v-if="showingAddModal">
            <div class="modalContainer">
                <div class="modalHeading">
                    <p class="fleft">Tambah Toko </p>
                    <button class="fright crossBox" @click="showingAddModal=false">x</button>
                    <div class="clear"></div>

                </div>
                <div class="modalContent">
                    <form>
                        <label for="">Nama Toko: </label>
                        <input type="text" placeholder="Masukkan Nama Toko" v-model="newUser.username"><br><br>
                        <label for="">Email: </label>
                        <input type="text" placeholder="Masukkan Email" v-model="newUser.email"><br><br>
                        <label for="">Telepon: </label>
                        <input type="text" placeholder="Masukkan No Telp" v-model="newUser.phone"><br><br>
                    </form>
                    <button class="button" @click="showingAddModal=false; saveUser();">Submit</button>
                </div>
            </div>
        </div>
        
        <div class="modal" id="editModal" v-if="showingEditModal">
            <div class="modalContainer">
                <div class="modalHeading">
                    <p class="fleft">Edit Toko </p>
                    <button class="fright crossBox" @click="showingEditModal=false">x</button>
                    <div class="clear"></div>

                </div>
                <div class="modalContent">
                    <form>
                        <label for="">Nama Toko: </label>
                        <input type="text" v-model="clickedUser.username"><br><br>
                        <label for="">Email: </label>
                        <input type="text"  v-model="clickedUser.email"><br><br>
                        <label for="">Telepon: </label>
                        <input type="text"  v-model="clickedUser.phone"><br><br>
                    </form>
                    <button class="button" @click="showingEditModal=false; updateUser();">Update</button>
                </div>
            </div>
        </div>

        <div class="modal" id="deleteModal" v-if="showingDeleteModal">
            <div class="modalContainer">
                <div class="modalHeading">
                    <p class="fleft">Are you sure ?</p>
                    <button class="fright crossBox" @click="showingDeleteModal=false">x</button>
                    <div class="clear"></div>

                </div>
                <div class="modalContent">
                    <p>You Want To Delete Mitra Toko: "<b>{{clickedUser.username}}</b>??"</p><br>
                    <button class="button" @click="showingDeleteModal=false; deleteUser();">Yes</button>
                    <button class="button" @click="showingDeleteModal=false">No</button>
                </div>
            </div>
        </div>



    </div>


    <script type="text/javascript" src="axios.js"></script>
    <script type="text/javascript" src="vue.js"></script>
    <script type="text/javascript" src="app.js"></script>

</body>

</html>