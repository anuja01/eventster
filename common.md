### For redux selectors, can use [lodash get](https://lodash.com/docs/#get) to get a specific value from state object.  
const getCompanyList = () => state => get(state, 'data.companyList', [])   
