var app = new Vue({
	el: "#root",
	data: {
		errorMessage: "",
		successMessage: "",
		insu: [],
		insus: [],
		newInsu: {name: ""},
		clickedIns: {}
	},

	mounted: function(){
		console.log("mounted");
		this.getAllUsers();
	},

	methods: {
		getAllUsers: function() {
			axios.get("http://localhost:800/MiCare/Pharmacy/C/insu_api.php?action=read")
			.then(function(response){
				//console.log(response)
				if (response.data.error) {
					app.errorMessage = response.data.message;
				}else{
					app.successMessage = response.data.message;
					app.insu = response.data.insu;
					app.insus = response.data.insus;
				}
			})
		},
		saveInsu: function(){
			console.log(app.newInsu); 
			var formData = app.toFormData(app.newInsu);

			if (app.newInsu.name != "") {

			axios.post("http://localhost:800/MiCare/Pharmacy/C/insu_api.php?action=create", formData)
			.then(function(response){
				// console.log(response);
				app.newInsu= {name: ""}
			if (response.data.error) {
				app.errorMessage = response.data.message;
			}else{
				app.successMessage = response.data.message;
				app.getAllUsers();
			}
			});
			}else{
				alert("Please select one in the list");
			}
		},

		updateInsu: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.clickedIns);
			axios.post("http://localhost:800/MiCare/Pharmacy/C/insu_api.php?action=update", formData)
			.then(function(response){
				app.successMessage = response.data.message;
				// console.log(response);
				app.clickedIns = {};
			if (response.data.error) {
				app.errorMessage = response.data.message;
			}else{
				app.getAllUsers();
			}
			});
		},

		deleteInsu: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.clickedIns);
			axios.post("http://localhost:800/MiCare/Pharmacy/C/insu_api.php?action=delete", formData)
			.then(function(response){
				app.successMessage = response.data.message;
				// console.log(response);
				app.clickedIns = {};
			if (response.data.error) {
				app.errorMessage = response.data.message;
			}else{
				app.getAllUsers();
			}
			});
		},


		selectInsu(ins){
			app.clickedIns = ins;
		},
		toFormData: function(obj){
			var form_data = new FormData();
			for(var key in obj){
				form_data.append(key, obj[key]);
			}
			return form_data;
		},
	}
}); 