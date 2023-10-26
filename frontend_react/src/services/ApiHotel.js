
  const url = `http://localhost:8200/api/hotels`;
  const getHotelData = await fetch( url );
  const data = await getHotelData.json();

  
  export default {
    data,
  };