
function Enigma() {
  this.encrypt = "abcdefghijklmnopqrstuvwxyz '.,:;";
  this.decrypt = "jdwovarig xunsyqcp'fmztkhbel.,:;";
}

var decryptage = [];
decryptage["a"] = "j";
decryptage["b"] = "d";
decryptage["c"] = "w";
decryptage["d"] = "o";
decryptage["e"] = "v";
decryptage["f"] = "a";
decryptage["g"] = "r";
decryptage["h"] = "i";
decryptage["i"] = "g";
decryptage["j"] = " ";
decryptage["k"] = "x";
decryptage["l"] = "u";
decryptage["m"] = "n";
decryptage["n"] = "s";
decryptage["o"] = "y";
decryptage["p"] = "q";
decryptage["q"] = "c";
decryptage["r"] = "p";
decryptage["s"] = "'";
decryptage["t"] = "f";
decryptage["u"] = "m";
decryptage["v"] = "z";
decryptage["w"] = "t";
decryptage["x"] = "k";
decryptage["y"] = "h";
decryptage["z"] = "b";
decryptage[" "] = "e";
decryptage["'"] = "l";
decryptage["."] = ".";
decryptage[","] = ",";
decryptage[":"] = ":";
decryptage[";"] = ";";
