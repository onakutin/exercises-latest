import { useState } from "react";
import check from "../img/check.svg";
import cross from "../img/cross.svg";
import question from "../img/question.svg";

const Toggle = () => {
	const [state, setState] = useState(0);

	const handleClick = () => {
		if (state == 2) {
			setState(0);
		} else {
			setState(state + 1);
		}
	};

	if (state === 0) {
		return <img src={question} alt="Questionmark" onClick={handleClick} />;
	} else if (state === 1) {
		return <img src={check} alt="Check" onClick={handleClick} />;
	} else if (state === 2) {
		return <img src={cross} alt="Cross" onClick={handleClick} />;
	}
};

export default Toggle;
