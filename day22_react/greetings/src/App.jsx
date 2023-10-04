import { useState } from "react";
import "./App.css";
import Greeting from "./components/Greeting";

function App() {
	const [submitInputs, setSubmitInputs] = useState([]);
	const [newFName, setNewFName] = useState("");
	const [newLName, setNewLName] = useState("");
	const [newAge, setNewAge] = useState("");
	const [newGender, setNewGender] = useState("");

	return (
		<>
			<h1>Please provide us information so we can sell it to advertisers</h1>
			<form className="input-info">
				<label htmlFor="fName">
					First name
					<input
						type="text"
						id="fName"
						placeholder="Enter your first name"
						value={newFName}
						onChange={(e) => setNewFName(e.target.value)}
					/>
				</label>
				<label htmlFor="lName">
					Last name
					<input
						type="text"
						id="lName"
						placeholder="Enter your last name"
						value={newLName}
						onChange={(e) => setNewLName(e.target.value)}
					/>
				</label>
				<label htmlFor="age">
					Age
					<input
						type="number"
						id="age"
						placeholder="Enter your age"
						value={newAge}
						onChange={(e) => setNewAge(e.target.value)}
					/>
				</label>
				<label htmlFor="gender">
					Gender
					<select
						id="gender"
						placeholder="Choose your gender"
						value={newGender}
						onChange={(e) => setNewGender(e.target.value)}
					>
						<option value="null"></option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</label>
				<button
					onClick={() => {
						setSubmitInputs([newFName, newLName, newAge, newGender]);
						setNewFName("");
						setNewLName("");
						setNewAge("");
						setNewGender("");
					}}
					type="button"
				>
					Submit
				</button>
			</form>
			<p>
				<Greeting
					fName={submitInputs[0]}
					lName={submitInputs[1]}
					age={submitInputs[2]}
					gender={submitInputs[3]}
				/>
			</p>
		</>
	);
}

export default App;
