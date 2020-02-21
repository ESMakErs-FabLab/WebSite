file = open("design.css", "w");

# Width et Height

array = ["width", "height"];

for dimention in array:
	for i in range(1,151):
		file.write("." + dimention + "-" + str(i*5) + "px {" + dimention + ": " + str(i*5) + "px;}\n");
	for i in range(1,21):
		file.write("." + dimention + "-" + str(i*5) + " {" + dimention + ": " + str(i*5) + "%;}\n");

# Font-size

for i in range(1,51):
	file.write(".font-size-" + str(i*2) + " {font-size: " + str(i*2) + "px;}\n");

# Margin

classSide = ["", "t", "b", "r", "l"];
side = ["", "-top", "-bottom", "-right", "-left"];

for k in range(len(side)):
	file.write(".m" + str(classSide[k]) + "-auto {margin" + str(side[k]) + ": auto;}\n");
	for i in range(51):
		file.write(".m" + str(classSide[k]) + "-" + str(i*5) + " {margin"+ str(side[k]) + ": " + str(i*5) + "px;}\n");

# Padding

for k in range(len(side)):
	file.write(".p" + str(classSide[k]) + "-auto {padding" + str(side[k]) + ": auto;}\n");
	for i in range(51):
		file.write(".p" + str(classSide[k]) + "-" + str(i*5) + " {padding"+ str(side[k]) + ": " + str(i*5) + "px;}\n");

# Flex Ratio

prefixes = ["g", "s"]
array = ["-grow", "-shrink"]

for prefix in prefixes:
	for flex in array:
		for i in range(1, 11):
			file.write(".f" + prefix + "-" + str(i) + " {flex" + flex + ": " + str(i) + ";}\n");

file.close();