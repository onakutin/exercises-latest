// import "./App.css";
import { CarriageAisle } from "./Components/CarriageAisle";

const numberOfSeats = 72;
const data = [];
for (let i = 1; i <= numberOfSeats; i++) {
	data.push(i);
}

function App() {
	return (
		<>
			<div className="train-carriage">
				<CarriageAisle />
				<CarriageAisle />

				<div className="aisle-spacer"></div>
				<CarriageAisle />
				<CarriageAisle />
			</div>
		</>
	);
}

export default App;
