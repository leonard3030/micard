var app = new Vue({
	el: "#root",
	data: {
		errorMessage: "",
		successMessage: "",
		users: [],
		insus: [],
		pends: [],
		trashes: [],
		newPat: {Names: "",Gender: "",D_O_B: "",Address:"",Phone:"",Insurance:"",Username:"",Password:""},
		clickedPhar: {},
		clickedperm: {},
		dises: [],
		clickedpend: {},
		clickedtrash: {}
	},

	mounted: function(){
		console.log("mounted");
		this.getAllUsers();

	},

	methods: {
		getAllUsers: function() {
			axios.get("http://localhost:800/MiCare/Pharmacy/C/patient_api.php?action=read")
			.then(function(response){
					app.insus = response.data.insus;
					app.users = response.data.users;
					app.pends = response.data.pend;
					app.dises = response.data.dises;
					app.trashes = response.data.trashes;
			})
		},
		savePat: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.newPat);

			if (app.newPat.Names != "" && app.newPat.Gender != "" && app.newPat.D_O_B != "" && app.newPat.Address != "" && app.newPat.Phone != "" && app.newPat.Insurance != "" && app.newPat.Username != "" && app.newPat.Password != "") {

			axios.post("http://localhost:800/MiCare/Pharmacy/C/patient_api.php?action=create", formData)
			.then(function(response){
				// console.log(response);
				app.newPat = {Names: "",Gender: "",D_O_B: "",Address:"",Phone:"",Insurance:"",Username:"",Password:""};
			if (response.data.error) {
				app.errorMessage = response.data.message;
			}else{
				app.successMessage = response.data.message;
				app.getAllUsers();
			}
			});
			}
		},

		updateUser: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.clickedPhar);
			axios.post("http://localhost:800/MiCare/Pharmacy/C/patient_api.php?action=update", formData)
			.then(function(response){
				// console.log(response);
				app.clickedPhar = {};
			if (response.data.error) {
				app.errorMessage = response.data.message;
			}else{
				app.successMessage = response.data.message;
				app.getAllUsers();
			}
			});
		},

		deleteUser: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.clickedPhar);

			axios.post("http://localhost:800/MiCare/Pharmacy/C/patient_api.php?action=delete", formData)
			.then(function(response){
				// console.log(response);
				app.clickedPhar = {};
			if (response.data.error) {
				app.errorMessage = response.data.message;
			}else{
				app.successMessage = response.data.message;
				app.getAllUsers();
			}
			});
		},
		restoreUser: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.clickedtrash);

			axios.post("http://localhost:800/MiCare/Pharmacy/C/patient_api.php?action=restore", formData)
			.then(function(response){
				// console.log(response);
				app.clickedtrash = {};
			if (response.data.error) {
				app.errorMessage = response.data.message;
			}else{
				app.successMessage = response.data.message;
				app.getAllUsers();
			}
			});
		},
		permUser: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.clickedperm);

			axios.post("http://localhost:800/MiCare/Pharmacy/C/patient_api.php?action=perm", formData)
			.then(function(response){
				// console.log(response);
				app.clickedperm = {};
			if (response.data.error) {
				app.errorMessage = response.data.message;
			}else{
				app.successMessage = response.data.message;
				app.getAllUsers();
			}
			});
		},

		rejectUser: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.clickedpend);

			axios.post("http://localhost:800/MiCare/Pharmacy/C/patient_api.php?action=reject", formData)
			.then(function(response){
				// console.log(response);
				app.clickedpend = {};
			if (response.data.error) {
				app.errorMessage = response.data.message;
			}else{
				app.successMessage = response.data.message;
				app.getAllUsers();
			}
			});
		},

		approveUser: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.clickedpend);

			axios.post("http://localhost:800/MiCare/Pharmacy/C/patient_api.php?action=approve", formData)
			.then(function(response){
				// console.log(response);
				app.clickedpend = {};
			if (response.data.error) {
				app.errorMessage = response.data.message;
			}else{
				app.successMessage = response.data.message;
				app.getAllUsers();
			}
			});
		},

		selectUser(user,trash,perm,pend){
			app.clickedPhar = user;
			app.clickedtrash = trash;
			app.clickedperm = perm;
			app.clickedpend = pend;
			console.log(pend);
		},
		toFormData: function(obj){
			var form_data = new FormData();
			for(var key in obj){
				form_data.append(key, obj[key]);
			}
			return form_data;
		}
	}
}); 