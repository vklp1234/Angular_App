app1.controller("mycrtl",function($scope,$http){

	select();
		$scope.updatebtn =false;
		$scope.addbtn=true;
		function select()
		{

			$http.get("Process/select.php").success(function(data){

				$scope.item = data;

			});
		}



	$scope.insert = function(){
		

		$http.post("Process/process.php", {uname: $scope.uname, fname: $scope.fname,email: $scope.email, pass: $scope.pass,cnumber: $scope.cnumber,gender:$scope.gender}).
        success(function(data, status, headers, config)
         {
           alert('data insterted');
         });
        $scope.uname="";
        $scope.fname = "";
        $scope.email = "";
        $scope.password = "";
        $scope.cnumber="";
        $scope.gender="";
	}
	$scope.delete = function(items)
	{
		$http.post("Process/delete.php",{uname: items}).success(function(data,status,headers,config)
			{
				select();
				alert('deleted');
			});
	}
	$scope.edit =function(uname,email,fname,gender,cnumber)
	{
		$scope.updatebtn =true;
		$scope.addbtn =false;
		$scope.pass = false;
		$scope.fname=fname;

		
		$scope.uname=uname;
		$scope.email=email;
		
		$scope.gender=gender;
		$scope.cnumber=cnumber;

	}
	$scope.update = function()
	{

		$http.post("Process/update.php",{uname: $scope.uname,email: $scope.email,fname: $scope.fname,gender: $scope.gender,cnumber: $scope.cnumber,pass: $scope.pass}).success(function(data,status,headers,config)
		{
			select();
			alert("update successfully");
		});
		$scope.uname="";
		$scope.email="";
		$scope.fname="";
		$scope.pass="";
		$scope.gender="";
		$scope.cnumber="";
		$scope.updatebtn=false;
		$scope.addbtn=true;


	}




});