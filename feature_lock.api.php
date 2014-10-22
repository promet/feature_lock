This module provide possibility to lock features. It return an associative array
whose keys define elements and whose values are an associative array of
properties for each element.

example:
@code
  function mymodule_lock_feature() {
    $lock = array(
      'features' => array('feature_machine_name_1', 'feature_machine_name_2'),
      'components' => array('component_variable_name_1', 'component_variable_name_2'),
      'components_of_feature' => array(
        'feature_machine_name_1' => array(
          'component_name_1' => TRUE,
          'component_name_2' => TRUE,
        ),
        'feature_machine_name_2' => array(
          'component_name_1' => TRUE
        ),
      ),
    );
    return $lock;
  }

@return
  An array of elements that should be locked. Each lock element has
  associative array that may contain the following key-value pairs:
  - "features": The machine name of feature, that should be locked.
  - "components": The component's variable name, that should be locked.
  - "components_of_feature": An array of features and particular components,
   that should be locked.