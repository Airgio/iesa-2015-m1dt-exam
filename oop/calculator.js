
function Calculator() {
  this.result = 0;
  this.add = function(add){
  	if (isNaN(add) || arguments.length > 1) {
  		this.result = 0;
  	} else {
  		this.result = this.result + add;	
  	}
  };
  this.minus = function(minus){
  	if (isNaN(minus) || arguments.length > 1) {
  		this.result = 0;
  	} else {
  		this.result = this.result - minus;	
  	}
  };
  this.divide = function(divide){
  	if (isNaN(divide) || arguments.length > 1) {
  		this.result = 0;
  	} else {
  		this.result = this.result / divide;	
  	}
  };
  this.multiply = function(multiply){
  	if (isNaN(multiply) || arguments.length > 1) {
  		this.result = 0;
  	} else {
  		this.result = this.result * multiply;	
  	}
  };
}

