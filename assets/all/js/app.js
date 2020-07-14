var app = new Vue({
	el: "#root",
	data: {
		errorMessage: "",
		successMessage: "",
		users: [],
		newPhar: {names: "",address: "",Phone: "",MD: "",MD_Phone: "",Username: "",Password: ""},
		clickedPhar: {}
	},

	mounted: function(){
		console.log("mounted");
		this.getAllUsers();
	},

	methods: {
		getAllUsers: function() {
			axios.get("http://192.168.43.185/synertech/MiCare/admin/C/pharma_api.php?action=read")
			.then(function(response){
				//console.log(response)
				if (response.data.error) {
					app.errorMessage = response.data.message;
				}else{
					app.successMessage = response.data.message;
					app.users = response.data.users;
				}
			})
		},
		saveUser: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.newPhar);

			if (app.newPhar.names != "" && app.newPhar.address != "" && app.newPhar.Phone != ""  && app.newPhar.MD != ""  && app.newPhar.Phone != "MD_Phone" && app.newPhar.Username != ""  && app.newPhar.Password != ""  ) {

			axios.post("http://192.168.43.185/synertech/MiCare/admin/C/pharma_api.php?action=create", formData)
			.then(function(response){
				// console.log(response);
				app.newPhar = {names: "",address: "",Phone: "",MD: "",MD_Phone: "",Username: "",Password: ""};
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
			axios.post("http://192.168.43.185/synertech/MiCare/admin/C/pharma_api.php?action=update", formData)
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

			axios.post("http://192.168.43.185/synertech/MiCare/admin/C/pharma_api.php?action=delete", formData)
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
		grantUser: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.clickedPhar);

			axios.post("http://192.168.43.185/synertech/MiCare/admin/C/pharma_api.php?action=grant", formData)
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
		revokeUser: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.clickedPhar);

			axios.post("http://192.168.43.185/synertech/MiCare/admin/C/pharma_api.php?action=revoke", formData)
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

		selectUser(user){
			app.clickedPhar = user;
		},
		toFormData: function(obj){
			var form_data = new FormData();
			for(var key in obj){
				form_data.append(key, obj[key]);
			}
			return form_data;
		},
		clearMessage: function(){
			app.errorMessage = "";
			app.successMessage = "";
		},
	}
}); 