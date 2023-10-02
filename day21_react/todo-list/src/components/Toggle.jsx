import { useState } from "react";

import check from "../img/check.svg";
import cross from "../img/cross.svg";
import question from "../img/question.svg";

const Toggle = () => {
	const [state, setState] = useState(0);

	const handleClick = () => {
		if (state === 2) {
			setState(0);
		} else {
			setState(state + 1);
		}
	};

	if (state === 0) {
		return (
			<>
				<img src={question} alt="check" onClick={handleClick} />
			</>
		);
	} else if (state === 1) {
		return (
			<>
				<img src={check} alt="check" onClick={handleClick} />
			</>
		);
	} else {
		return (
			<>
				<img src={cross} alt="check" onClick={handleClick} />
			</>
		);
	}
};

export default Toggle;
