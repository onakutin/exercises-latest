const Greeting = ({ fName, lName, age, gender }) => {
	const hey = (age, gender) => {
		if (Number(age) < 12) {
			return "Hello";
		} else if (Number(age) > 35) {
			return "Good day";
		} else {
			if (gender == "male") {
				return "HAY MAN,";
			} else if (gender == "female") {
				return "Hello";
			} else return "";
		}
	};

	const title = (age, fName, lName, gender) => {
		if (age < 10) {
			return fName;
		} else if (Number(age) < 12) {
			return fName + " " + lName;
		} else if (Number(age) < 35) {
			return fName;
		} else {
			if (gender === "male") {
				return "Mr. " + lName;
			} else if (gender === "female") {
				return "Ms." + lName;
			} else return "";
		}
	};

	return hey(age, gender) + " " + title(age, fName, lName, gender);
};

export default Greeting;
