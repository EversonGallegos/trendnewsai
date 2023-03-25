const { origin: BASE_URL } = window.location;

export const getRequest = async (API_URL, config = {}) => {
  const response = await fetch(`${BASE_URL}/wp-json${API_URL}`, config)
    .then((response) => response.json());
  return response;
}