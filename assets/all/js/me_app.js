var app = new Vue({
	el: "#root",
	data: {
		users: [],
		insus: [],
		dises: [],
		message: "Choose Recipient"
	},

	mounted: function(){
		console.log("mounted");
		this.getAllUsers();
	},

	methods: {getAllUsers: function() {
			axios.get("http://localhost:800/MiCare/Pharmacy/C/patient_api.php?action=read")
			.then(function(response){
					app.insus = response.data.insus;
					app.dises = response.data.dises;
					app.users = response.data.users;
			})
		},
	}
}); 