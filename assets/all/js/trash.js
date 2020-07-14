var app = new Vue({
	el: "#root",
	data: {
		errorMessage: "",
		successMessage: "",
		insu: [],
		clickedIns: {}
	},

	mounted: function(){
		console.log("mounted");
		this.getAllUsers();
	},

	methods: {
		getAllUsers: function() {
			axios.get("http://localhost:800/MiCare/Pharmacy/C/trash_api.php?action=read")
			.then(function(response){
				//console.log(response)
				if (response.data.error) {
					app.errorMessage = response.data.message;
				}else{
					app.successMessage = response.data.message;
					app.insu = response.data.insu;
				}
			})
		},

		restoreInsu: function(){
			//console.log(app.newUser); 
			var formData = app.toFormData(app.clickedIns);

			axios.post("http://localhost:800/MiCare/Pharmacy/C/trash_api.php?action=restore", formData)
			.then(function(response){
				// console.log(response);
				app.clickedIns = {};
			if (response.data.error) {
				app.errorMessage = response.data.message;
			}else{
				app.successMessage = response.data.message;
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
		clearMessage: function(){
			app.errorMessage = "";
			app.successMessage = "";
		},
	}
}); 